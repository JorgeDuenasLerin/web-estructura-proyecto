#!/bin/bash

for f in *; do
  if [[ -d $f ]]; then
    echo "rm $f/README.md";
    rm $f/README.md
  fi;
done;
