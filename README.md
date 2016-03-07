<h1>SUSI</h1>

<h2>Sistema Unificado de Saúde Informatizado.</h2>

<p>
O sistema visa suprir as necessidades dos servidores dos setores de saúde do Instituto Federal de Educação, Ciência e Tecnologia (do Rio Grande do Norte) que, ao contrário dos outros setores instituição (como Biblioteca, Serviço Social etc.), carecem de um sistema informatizado para organizar as suas informações.
</p>

<p>Nos foi solicitado pela enfermeira do campus Natal - Zona Norte (IFRN) a elaboração de uma forma mais eficiente de gerenciamento de estoque de materiais do setor, pois até o momento é feito o uso de planilhas em MS Excel bastante povoadas, confusas e ineficientes. Também foi citado que é frequente a doação e recebimento de materiais de outros campi, para manter a situação econômica interna da instituição estável de forma que se autoajudasse.
</p>

<p>
Diante deste cenário problemático, foi elaborada a ideia de construir um sistema transparente e unificado entre os campi, onde cada um administraria seu próprio estoque mas também divulgaria suas possíveis trocas intercampi. Além disso, a situação dos estoques seria disponível publicamente de forma democrática.
</p>

<h3>Instalação</h3>
<p>
Baixe os arquivos do repositório para o diretório adequado de execução do PHP (está perdido? Pesquise por execução local usando <a href='https://blog.udemy.com/xampp-tutorial/' target='_blank'>XAMPP</a>). Com o ambiente do servidor funciondo, rode os scripts './sql/database.sql' e './sql/povoamento.sql' (nesta ordem) (sugestão: usar o <a href='http://support.hostgator.com/articles/specialized-help/technical/phpmyadmin/how-to-run-sql-queries-in-phpmyadmin'>phpmyadmin<a/>). Com o banco de dados instalado, agora edite o arquivo './src/app/config/database.php' e modifique os valores do array associativo <code>$default</code> para se ajustar às características do banco de dados, como endereço, usuário e senha de acesso do MySQL. Por fim, pelo navegador o '/src/' (cujo caminho está no que foi pré-configurado pelo seu servidor web para rodar no browser) e a tela de login do sistema deverá surgir, onde você pode ter a primeira interação através do usuário inicial (administrador):
</p>
<p>
Usuário: admin@susi.com<br/>
Senha: susi
</p>
<p>
As tecnologias utilizadas para execução foram: XAMPP (isto é, Apache e MySQL), navegadores Chrome e Firefox, tanto em Windows 10 quanto Linux Mint. Para desenvolvimento, foi usado o framework CakePHP no server side e Twitter Bootstrap no front end, sem nenhuma IDE. Todas as tecnologias supracitadas stão em suas últimas versões atuais (estamos em 07/04/16).
</p>

<h3>Licenças</h3>

<p>
O sistema está todo sob a licença The MIT License, seja de autoria dos <a href="LICENSE">colaboradores</a> ou, no caso dos arquivos em extensão .css que referenciam o framework Bootstrap, da <a href="https://github.com/twbs/bootstrap">Twitter Inc</a>.
</p>
