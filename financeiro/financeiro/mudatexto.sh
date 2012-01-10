#!/bin/sh
for i in $(ls *.php); {
  sed -i 's/\.\.\/includes\/menu_lateral\.php/\"\.\.\/includes\/menu_lateral\.php\"/g' "$i"
}
