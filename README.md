# APIDBMySQLPHP

Um WAMP para quem usa Windows (recomendamos o EasyPHP) 
Um LAMP para quem usa Linux 
Um MAMP para quem usa MacOS

EASYPHP
https://www.easyphp.org/save-easyphp-devserver-latest.php

VSCODE

PHPStorm
https://www.microsoft.com/en-us/download/details.aspx?id=30679

Erro para inicializar o ambiente PHP e MySQL
Entendido! Esse erro aparece porque o EasyPHP (ou algum módulo dele, como Apache ou MySQL) depende da biblioteca MSVCR110.dll, que vem do Microsoft Visual C++ 2012 Redistributable.
🔧 Passo a passo para corrigir o erro no EasyPHP:
1.	Baixe o Visual C++ Redistributable 2012 (x86 e x64):
o	Página oficial da Microsoft
2.	Escolha as versões para baixar:
o	Baixe os dois arquivos:
	vcredist_x86.exe
	vcredist_x64.exe
3.	Instale os dois arquivos:
o	Dê dois cliques em cada um e siga as instruções de instalação.
4.	Reinicie o computador (recomendado).
5.	Abra novamente o EasyPHP.

EasyPHP Devserver
C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www
