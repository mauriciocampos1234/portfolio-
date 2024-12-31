$('.owl-carousel').owlCarousel({
    loop: true, // Habilita o loop contínuo
    margin: 10, // Margem entre os itens
    nav: true, // Habilita botões de navegação
    dots: true, // Habilita os pontos de paginação
    responsive: {
        0: {
            items: 1 // 1 imagem visível por vez no celular
        },
        600: {
            items: 2 // 2 imagens visíveis em tablets
        },
        1000: {
            items: 3 // 3 imagens visíveis em desktops
        }
    }
});

