$(function () {

    // profile.blade.php、edit.blade において、プロフィール画像がアップロードされたら、画像をブラウザ上に即反映
    $('#profile_img').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".profile-image-preview").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // 性別の選択内容で、「グループの雰囲気」セレクトボックスの表示をコントロール
    $('input[name="gender"]').on('change', function() {

        // 男性の場合
        if ($(this).val() === '0') {
            
            $('option.option-man').prop('hidden', false)
            $('option.option-woman').prop('hidden', true)
        }
        // 女性の場合
        if ($(this).val() === '1') {

            $('option.option-man').prop('hidden', true)
            $('option.option-woman').prop('hidden', false)
        }
    })

   
    // 条件を絞るボタンをクリックで、select-formがトグルダウン
    $('.main-select-search-title').on('click', function() {
        $('.select-form').slideToggle();
    })

    $('.not-match').on('click', function() {
        alert ('マッチしていないので、メッセージを送信することはできません');
    })

    $('input[name="chat_message"]').on('change', function() {
        if ($(this).val() !== '') {
            $(this).next().prop('disabled', false);
        }
        if ($(this).val() === '') {
            $(this).next().prop('disabled', true);
        }
    })

    // 画像モーダル表示
    $('.show-profile-img').on('click', function(){
        var imgSrc = $(this).attr('src');
        
        $('.bigImg').children().attr('src', imgSrc);
     
        $('.modal').fadeIn();
        $('body,html').css('overflow-y', 'hidden');
     
        return false
        
    });
    
    $('.close-btn').on('click', function() {
        $('.modal').fadeOut();
        
        $('body,html').css('overflow-y', 'visible');
       
        return false
    });

    // アカウント削除する際の警告文の表示
    $('#do-account-delete').on('click', function() {
        $('.account-delete-page').addClass('open-delete');
        return false;
    })
    $('#do-account-delete-sp').on('click', function() {
        $('.account-delete-page').addClass('open-delete');
        return false;
    })

    $('.account-delete-cancel').on('click', function() {
        $('.account-delete-page').removeClass('open-delete');
        return false;
    })

    $('.menu-icon').on('click', function() {
        $(this).toggleClass('slide-open');
        $('.slide-menu').toggleClass('slide-open');
        $('.slide-menu-down').toggleClass('slide-open');
    })
})



  