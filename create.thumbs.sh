find . -type f -name '*.pdf' -print0 |
  while IFS= read -r -d '' file
    do convert -verbose -density 96 -resize 400 "${file}"[0] "${file%.*}.png"
  done