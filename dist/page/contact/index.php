<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>template</title>
        <meta name="viewport" content="width=device-width,user-scalable=yes">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="img/ogp.png">
        <meta property="og:type" content="company">
        <meta property="og:locale" content="jp_JP">
        <meta property="og:site_name" content="">
        <meta property="og:url" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="img/ogp.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@">
        <meta name="twitter:url" content="">
        <meta name="msvalidate.01" content="7851330534A5BE0314CDBED4D717C563">
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="./img/favicons/favicon.ico">
        <link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicons/favicon.ico">
        <link rel="icon" href="../img/favicons/favicon.ico">
        <link rel="canonical" href="">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="../css/reset/reset.css">
        <link rel="stylesheet" href="../../css/contact/style.css">
        <link rel="stylesheet" href="../css/font/font.css">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Noto+Sans+JP:wght@100;300;400;500;700;900&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.typekit.net/bzf2hbl.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
        <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        
    </head>
    <body>
        <main>
            <section class="contact">
                <div class="contact__top">
                    <h1>来場予約はこちら</h1>
                    <div class="contactFlow">
                        <img src="../../img/contactFlow-first.jpg" alt="">
                    </div>
                </div>
                <form class="h-adr" method="post" action="confirm.php">
                    <div class="contact__model"> 
                        <div class="contact__label">
                            <label for="model">ご利用モデル</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__model-selector">
                            <select name="model" required>
                                <option value="" disabled selected style="display:none;">ご希望のモデルを選択してください</option>
                                <option value="template">template</option>
                                <option value="template">template</option>
                                <option value="template">template</option>
                            </select>
                        </div>
                    </div>
                    <div class="contact__date"> 
                        <div class="contact__label">
                            <label for="date">希望日時</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__date-selector">
                            <div class="contact__date__schedule">
                                <div class="contact__date__schedule__first">
                                    <p>希望日</p>
                                    <input type="text" id="datepicker1" name="date" placeholder="ご希望の日付"required>
                                </div>
                            </div>
                            <div class="contact__date__time">
                                <div class="contact__date__time__first">
                                    <p>希望時間</p>
                                    <select name="time" placeholder="ご希望の時間帯" required>
                                        <option value="" disabled selected style="display:none;">ご希望の時間帯</option>
                                        <option value="10:00~11:00">10:00~11:00</option>
                                        <option value="11:00~12:00">11:00~12:00</option>
                                        <option value="13:00~14:00">13:00~14:00</option>
                                        <option value="14:00~15:00">14:00~15:00</option>
                                        <option value="15:00~16:00">15:00~16:00</option>
                                        <option value="16:00~17:00">16:00~17:00</option>
                                        <option value="17:00~18:00">17:00~18:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact__infoTop">
                        <h1>お客様情報の入力</h1>
                    </div>
                    <div class="contact__name">
                        <div class="contact__label">
                            <label for="name">お客様名</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <input type="text" placeholder="山田 太郎" name="name" required>
                    </div>
                    <div class="contact__postalNumber">
                        <div class="contact__label">
                            <label for="postalNumber">郵便番号</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__postalNumber__input">
                            <input type="text" placeholder="9500000（ハイフンなし）" name="postalNumber" class="p-postal-code" size="8" maxlength="8" required>
                            <p>※ 郵便番号を入力すると、住所を自動で入力できます。</p>
                        </div>
                        
                    </div>
                    <div class="contact__address">
                        <div class="contact__label">
                            <label for="address">ご住所</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__address__input">
                            <span class="p-country-name" style="display:none;">Japan</span>
                            <div class="contact__address__input-early">
                                <div class="contact__address__input-early__prefecture">
                                    <p>都道府県</p>
                                    <input type="text" class="p-region" placeholder="新潟県" name="address__pre" required/>
                                </div>
                                <div class="contact__address__input-early__region">
                                    <p>市町村</p>
                                    <input type="text" class="p-locality" placeholder="新潟市北区" name="address__region" required/>
                                </div>
                            </div>
                            <div class="contact__address__input-late">
                                <p>丁目・番地</p>
                                <input type="text" class="p-street-address p-extended-address"  placeholder="1-1-1" name="address__house" required/>
                                <p>建物名</p>
                                <input type="text" class="" placeholder="template502" name="address__building">
                            </div>
                        </div>
                    </div>
                    <div class="contact__phone">
                        <div class="contact__label">
                            <label for="name">電話番号</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__phone__input">
                            <input type="text" placeholder="090" name="phone__first" required>
                            <span>-</span>
                            <input type="text" placeholder="0000" name="phone__second" required>
                            <span>-</span>
                            <input type="text" placeholder="0000" name="phone__third" required>
                        </div>
                    </div>
                    <div class="contact__email">
                        <div class="contact__label">
                            <label for="name">メールアドレス</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <input type="text" placeholder="example@swedenhouse-hokuriku.com" name="email" required>
                    </div>
                    <div class="contact__terms">
                        <div class="contact__label">
                            <label for="name">個人情報保護方針</label>
                            <p class="contact__required">必須</p>
                        </div>
                        <div class="contact__terms__text">
                            <div class="contact__terms__textArea">
                                <p>1.個人情報の取り扱いについて</p>
                                <p>template（以下当社といいます）は、個人情報の保護に関する法律及び社内規定を遵守し、当社で取扱う個人情報の取得及び利用を適正に行い、且つ安全で最新の状態で管理することで、個人情報の保護の維持に努めてまいります。このプライバシーポリシーでは、当社におけるお客様の個人情報の取扱いについてご説明しておりますが、必要に応じて予告無く内容を変更することもありますので、情報ご提供・情報ご請求の際は、最新の内容をご確認下さいますよう、お願い申し上げます。</p>
                                <br>
                            </div>
                            <div class="contact__terms__textArea">
                                <p>2.個人情報の安全対策について</p>
                                <p>お客様の個人情報を安全に管理・運営するよう鋭意努力しており、個人情報への外部からの不正なアクセス、個人情報の紛失・毀損・破壊・改ざん・漏えい、社外への不正な流出などへの危険防止に対する合理的かつ適切な安全対策を行っています。</p>
                                <p>また個人情報を取り扱う部署ごとに情報セキュリティ管理者を置き、個人情報の適切な管理に努めるとともに、情報セキュリティに関する規定を設けて社員への周知徹底を実施しています。</p>
                                <br>
                            </div>
                            <div class="contact__terms__textArea">
                                <p>3.個人情報の利用目的について</p>
                                <p>お客様へ付帯工事を含む新築計画並びに増改築計画を提案するため</p>
                                <p>お客様へ新商品・各種イベント・セミナー・キャンペーン等のご案内をするため</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="contact__consent">
                        <div class="contact__consent__check">
                            <input type="checkbox" required>
                            <p class="contact__consent__text">個人方法保護方針に同意します</p>
                        </div>
                        <div class="contact__consent__btn">
                            <input type="submit" value="確認画面へ進む">
                        </div>
                    </div>
                </form>
            </section>
        </main>
        <script src="../../js/index.js"></script>
    </body>
</html>