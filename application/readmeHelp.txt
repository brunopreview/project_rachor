"cache" -> o CI utiliza quando se está utilizando uma estrutura que armazena dados, arquivos, etc. em cache  

"config" -> onde fica os arquivos de configuração do CI (banco de dados, routers, drivers, autoload, etc.)

"controller" -> pasta de controle do MVC onde a view solicita um dado para a controller e a controller busca a informação no model e devolve para a view

"core" -> utilizado caso deseja-se mudar algo em uma classe do núcleo do CI que fica em system/core no caso as alterações serão feitas na aplication/core

"erros" -> trata os erros do CI caso de 400 bad request ou no banco

"helpers" -> onde fica armazenado as funções auxiliares do sistema (deve ser carregada no autoload para iniciar junto ao CI)

"hooks" -> permite alterar o comportamento padrão do CI modificando o fluxo interno do CI (em casos super específicos)

"language" -> mensagens e alertas padrões estarão de acordo com a linguagem apresentada nesta pasta

"libraries" -> semelhante ao helper porem utilizado quando se deseja criar ou utilizar libs para extender funções do CI

"logs" -> onde ficam armazenados os logs de erro e alertas (pode-se alterar esses caminho dentro da pasta config/config.php)

"models" -> pasta model do MVC onde recebe a solicitação da controller e se comunica com o SGBD para executar o solicitado

"third_party" -> pacotes prontos no CI podendo conter um MVC interno com libs, funções e configs expecíficas

"view" -> pasta view do MVC parte onde se comunica com o usuário e chama as funções do controller

