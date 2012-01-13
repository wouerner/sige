#!/bin/sh
for i in $(ls *.php); {
  sed -i 's/\.\.\/\.\.\/includes\/conexao_bd\.php/\.\.\/includes\/conexao_bd\.php/g' "$i"
}
