$(document).ready(function () {

    //點擊menu選項
    $('.jk_authority .menu .item').click(function () {

        if ($(this).parent('ul').parent('li').hasClass('-on')) {      //子項已展開
            $(this).parent('ul').children('li:not(.item)').slideUp();          //收合       
            $('.jk_authority .menu .item').parent('ul').parent('li').removeClass('-on');    //移除記號




        } else {                              //子項未展開
            $(this).parent('ul').children('li:not(.item)').slideDown();        //點擊展開            
            $('.jk_authority .menu .item').parent('ul').parent('li').removeClass('-on');    //移除其他展開項記號
            $(this).parent('ul').parent('li').addClass('-on');      //給予記號 
            $('.jk_authority .menu .item').parent('ul').parent('li:not(.-on)').find('li:not(.item)').slideUp();    //收回其他展開項
        }
    });

    //收合sideMenu    
    $('.jk_authority .sideMenu .arrow>i').click(function () {

        if ($(this).hasClass('-rotate')) {

            $('.jk_authority .sideMenu').removeClass('-close');
            $('.jk_authority .sideMenu .arrow>i').removeClass('-rotate');
        } else {

            $('.jk_authority .sideMenu').addClass('-close');
            $('.jk_authority .sideMenu .arrow>i').addClass('-rotate');
        }

    });
    ////////////////////////國超段落///////////////////////////
    $('#jk_authorityChange').click(function () {

        // $('.jk_authorityChange').css('display', 'table');
        $('.jk_authority main').css('display', 'block');


    });

    ///////////////////SAM START////////////////
    $('#sam_authorityChange1').click(function () {
        $('main.sam_class').css('display', 'block');
    });

    $('#sam_authorityChange2').click(function () {
        $('div.sam_jump').addClass('-on');
    });

    $('img.cancel-icon').click(function () {
        $('div.sam_jump').addClass('-opacity-zero');

        setTimeout(function () {
            $('div.sam_jump').removeClass('-on -opacity-zero');
        }, 1000);
    });
    $('button.cancel').click(function (e) {
        let firm1 = confirm('是否下架此商品');
        if (firm1) {
            this.innerText = '已下架';
            this.closest('tr').style.background = 'rgba(120,120,120,.3)';
        } else {
            e.preventDefault();
        }
    });


    /////////////////////////kcc start ////////////////////////////
    $('#kcc_authorityChange1').click(function () {
        $('main.kcc_class').css('display', 'block');
    });

    $('#kcc_authorityChange2').click(function () {
        $('div.kcc_jump').addClass('-on');
    });

    $('img.cancel-icon').click(function () {
        $('div.kcc_jump').addClass('-opacity-zero');

        setTimeout(function () {
            $('div.kcc_jump').removeClass('-on -opacity-zero');
        }, 1000);
    });






});