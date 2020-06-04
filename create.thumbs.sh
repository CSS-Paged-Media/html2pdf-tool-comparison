find . -type f -name '*.pdf' -print0 |
  while IFS= read -r -d '' file
    do convert -verbose -density 500 -resize 800 "${file}" "${file%.*}.png"
  done