#XLSX to XML Converter

Smart converting XLSX (Excel 2007) file to XML (UTF-8) file. There are 3 type of node:
- **Main node** - main container wich contain only row node, can have also attributes witch user can define at conf \ xml.json file.
- **Row node** - can contain only column node.
- **Column node** - contains only data wich can be wrapped as CDATA
 
Firs row of *.xlsx will be ranked as column node's title. 
Example of Excel sheet available at xlsx/example.xlsx

## Settings

User be able following actions:
- Change main node name
- Add main node's attribute
- Change row node's name
- Set up CDATA for column node's.Just add column node's title to array

##Dependncies
- [**hassankhan/config**](https://github.com/hassankhan/config)
- [**phpoffice/phpspreadsheet**](https://github.com/PHPOffice/PhpSpreadsheet)
