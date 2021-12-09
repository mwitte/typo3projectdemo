#!/bin/sh
cd "$(dirname "$0")"
echo "Remove old backup"
rm -rf fileadmin
rm db.sql.gz
echo "Copy files"
cp -R ././../public/fileadmin .
cd ..
echo "Dump database"
ddev export-db --file=./backup/db.sql.gz