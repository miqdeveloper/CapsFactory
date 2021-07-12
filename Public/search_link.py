from glob import glob
from glob import glob
import re
string = "https://capsfactrorysys.herokuapp.com/';\n;"

a = re.findall('(\w+)://', string)

files_str = ['*.php', 'JSs/*.js']

def fun(files_str=files_str):
    for file_ in files_str:        
        for x in glob(file_):
            with open(x, 'r') as file_php:
                lines = file_php.readlines()
                n_lines = len(lines)
                for line in lines:
                    if a[0] in line:
                        print("Arquivos => ", file_php.name)
                        print("Linha index => ", lines.index(str(line)))
                        print("Number lines => ", len(lines), '\n')
                        print("Valor: ", line)
                        #print(file_php.name)
                    else:
                        pass




fun()