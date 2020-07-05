package html2pdf;

import java.io.File;
import java.io.FileOutputStream;
import java.io.OutputStream;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;


import org.xhtmlrenderer.pdf.ITextRenderer;

public class flyingsaucer {

    public static void main(String[] args) {
        flyingsaucer test = new flyingsaucer();
        String dirToList = "Z:/typeset/html/";
        test.listDirectory(dirToList, 0);
    }

    public void listDirectory(String dirPath, int level) {
        File dir = new File(dirPath);
        File[] firstLevelFiles = dir.listFiles();
        if (firstLevelFiles != null && firstLevelFiles.length > 0) {
            for (File aFile : firstLevelFiles) {
                for (int i = 0; i < level; i++) {
                    System.out.print("\t");
                }
                if (aFile.isDirectory()) {
                    System.out.println("[" + aFile.getName() + "]");
                    listDirectory(aFile.getAbsolutePath(), level + 1);
                } else {
                    String resultFilename = "flyingsaucer_" + aFile.getAbsolutePath().replace("\\", "_").replace(" ", "_").replace("Z:_typeset", "") + ".pdf";
                    String resultFilepath = aFile.getAbsolutePath().replace("\\html\\", "\\docs\\").replace(aFile.getName(), resultFilename);

                    try{
                        String url = new File(aFile.getAbsolutePath()).toURI().toURL().toString();
                        OutputStream os = new FileOutputStream(resultFilepath);

                        ITextRenderer renderer = new ITextRenderer();
                        renderer.setDocument(url);
                        renderer.layout();
                        renderer.createPDF(os);

                        os.close();
                    }catch(Exception e){
                        File source = new File("Z:\\typeset\\error.pdf");
                        File dest = new File(resultFilepath);
                        try{
                            Files.copy(source.toPath(), dest.toPath(),
                                    StandardCopyOption.REPLACE_EXISTING);
                        }catch (Exception er){
                            System.out.println("Can not copy error file " + er.getMessage());
                        }
                    }

                    System.out.println(resultFilepath);
                }
            }
        }
    }
}