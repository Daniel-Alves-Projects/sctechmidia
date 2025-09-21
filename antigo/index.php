<?php
$page_title = "home";
$meta_description = "";
include('includes/header.php');
?>
<body>
    <nav>
        <div class="logo">
        <img src="<?php echo img_url('logo.gif'); ?>" alt="gift banner">
        </div>
        <ul class="nav-links">
            <li><a href="#sobre">Sobre Nós</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
    
    <main class="hero">
        <div class="hero-content">
            <h1>Crie uma presença digital que gera resultados.</h1>
            <p>Especialistas em mídia social, criação de landing pages e e-mails profissionais para sua empresa.</p>
            <a href="#contato" class="cta-button">Fale Conosco</a>
        </div>
    </main>

    <section id="sobre" class="section">
        <h2>Sobre Nós</h2>
        <p>Somos a SCTechMidia, uma equipe apaixonada por conectar empresas com seus clientes através de estratégias digitais inteligentes. Nossa missão é transformar sua presença online em uma máquina de vendas, construindo sites que convertem e campanhas de mídia social que engajam.</p>
        </section>

    <section id="projetos" class="section">
        <h2>Projetos</h2>
        <div class="projetos-grid">
            <div class="projeto-item">
                <h3>Landing Page para [Nome da Empresa]</h3>
                <p>Desenvolvemos uma landing page otimizada para captar leads e impulsionar as vendas de um novo produto.</p>
                </div>
            <div class="projeto-item">
                <h3>Gestão de Mídia Social para [Nome da Empresa]</h3>
                <p>Criamos uma estratégia completa para aumentar o engajamento e a visibilidade nas redes sociais, resultando em um crescimento de 30% na base de seguidores.</p>
            </div>
            </div>
    </section>

    <section id="contato" class="section">
        <h2>Contato</h2>
        <p>Interessado em nossos serviços? Preencha o formulário abaixo ou entre em contato diretamente.</p>
        <form action="#" method="POST">
            <input type="text" name="nome" placeholder="Seu Nome" required>
            <input type="email" name="email" placeholder="Seu E-mail" required>
            <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
            <button type="submit">Enviar Mensagem</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 SCTechMidia. Todos os direitos reservados.</p>
    </footer>

</body>
</html>          