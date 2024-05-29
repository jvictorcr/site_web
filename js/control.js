//wattsapp
function sendMessage() {
    // Número de telefone para enviar a mensagem (substitua pelo seu número)
    var phoneNumber = "54999260755";

    // Mensagem a ser enviada
    var message = "Olá, gostaria de entrar em contato.";

    // Construa a URL do WhatsApp com o número e a mensagem
    var whatsappUrl = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

    // Abrir a URL em uma nova janela
    window.open(whatsappUrl, '_blank');
}

function showInfo(icon) {
    document.querySelectorAll('.icon-info[data-icon="' + icon + '"]').forEach(function (span) {
        span.style.display = 'block';
    });
}

function hideInfo(icon) {
    document.querySelectorAll('.icon-info[data-icon="' + icon + '"]').forEach(function (span) {
        span.style.display = 'none';
    });
}
document.addEventListener('DOMContentLoaded', function() {
    var navbarLinks = document.querySelectorAll('#navLinks a');
    var homeLink = document.querySelector('#navLinks a[href="#"]');
    var backToTopButton = document.querySelector('.back-to-top');
    var footerLinks = document.querySelectorAll('.footer-menu a');

    function removeActiveClass(links) {
        links.forEach(function(link) {
            link.classList.remove('active');
        });
    }

    function addActiveClass(link) {
        link.classList.add('active');
    }

    backToTopButton.addEventListener('click', function() {
        removeActiveClass(navbarLinks);
        addActiveClass(homeLink);
    });

    navbarLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            removeActiveClass(navbarLinks);
            addActiveClass(this);
            removeActiveClass(footerLinks);
        });
    });

    footerLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            removeActiveClass(navbarLinks);
            removeActiveClass(footerLinks);
            addActiveClass(this);

            // Ativa o link correspondente na tabela 1
            var index = Array.from(footerLinks).indexOf(this);
            addActiveClass(navbarLinks[index]);
        });
    });
});


