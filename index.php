<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger_market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hystmodal.min.css">
</head>

<body>
    <section class="main">
        <?php
        include './blocks/header.php';
        include './blocks/aside.php';
        ?>
        <section class="main-content">
            <div class="container">
                <div class="main-info">
                    <span class="main-small-info">
                        Новое меню
                    </span>
                    <h1 class="main-title">Бургер Чеддер</h1>
                    <p class="main-text">
                        Мы обновили наше меню, спешите попробовать сезонные новинки и насладиться отличным вкусом наших
                        бургеров. Готовим для вас лучшие бургеры в городе из отборной мраморной говядины.
                    </p>
                    <div class="main-action">
                        <button class="button">
                            Смотреть меню
                        </button>
                    </div>
                </div>
                <img src="images/main_burger.png" alt="burger" class="main-image">
            </div>

        </section>
    </section>
    <section class="why">
        <div class="container">
            <div class="why-title common-title">
                Почему нас выбирают?
            </div>
            <div class="why-items">
                <div class="why-item">
                    <img src="images/burger.png" alt="burgger">
                    <div class="why-item-title">
                        Авторские рецепты
                    </div>
                    <div class="why-item-text">
                        Наши бургеры обладают уникальным сочетанием вкусов и не похожи ни на какие другие. Мы тщательно
                        отбираем лучшие ингредиенты и сочетания вкусов для нашего меню.
                    </div>
                </div>
                <div class="why-item">
                    <img src="images/meat.png" alt="meat">
                    <div class="why-item-title">
                        Мраморная говядина
                    </div>
                    <div class="why-item-text">
                        Для наших бургеров мы используем отборную 100% мраморную говядину, которую закупаем
                        исключительно у фермеров. Мы уверены в качестве нашего мяса. </div>
                </div>
                <div class="why-item">
                    <img src="images/food truck.png" alt="food-truck">
                    <div class="why-item-title">
                        Быстрая доставка </div>
                    <div class="why-item-text">
                        Мы доставляем в пределах МКАД за 30 минут, а если не успеем — доставка бесплатно. Мы тщательно
                        упаковываем наши бургеры, чтобы по дороге они не остыли. </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="products-title common-title">
                выберите свой бургер
            </div>
            <div class="products-items">
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (1).png" alt="burger1">
                    </div>
                    <div class="products-item-title">
                        Бургер чеддер & бекон
                    </div>
                    <div class="products-item-text">
                        Котлета из говядины криспи, булочка, томат, сыр Чеддер, грудинка, лук красный, салат айсбер,
                        майонез, кетчуп, сырный соус
                    </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">8 $</div>
                            <div class="products-item-weight">300 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (2).png" alt="burger2">
                    </div>
                    <div class="products-item-title">
                        BBQ с беконом и курицей
                    </div>
                    <div class="products-item-text">
                        Булочка бриошь с кунжутом, куриная котлета, сыр чеддер, томат, огурец маринованный, лук
                        маринованный, салат Ромен, бекон, соус BBQ </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">7 $</div>
                            <div class="products-item-weight">300 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (3).png" alt="burger3">
                    </div>
                    <div class="products-item-title">
                        Дабл биф бургер </div>
                    <div class="products-item-text">
                        Две говяжьи котлеты, сыр чеддер, салат романо, маринованные огурцы, свежий томат, бекон, красный
                        лук, соус бургер, горчица </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">10 $</div>
                            <div class="products-item-weight">300 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (4).png" alt="burger4">
                    </div>
                    <div class="products-item-title">
                        Баварский бургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, говяжья котлета, красный лук, сыр, охотничья колбаска, соус барбекю, соус
                        сырный, салат айсберг </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">7 $</div>
                            <div class="products-item-weight">220 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (5).png" alt="burger5">
                    </div>
                    <div class="products-item-title">
                        Бекон чизбургер </div>
                    <div class="products-item-text">
                        Булочка для бургера, говяжья котлета, грудинка, помидор, огурец маринованный, сыр, сырный соус,
                        кетчуп, зелень </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">8 $</div>
                            <div class="products-item-weight">220 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/Burger (6).png" alt="burger6">
                    </div>
                    <div class="products-item-title">
                        Индиана бургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, котлета куриная, грудинка, яйцо, огурец маринованный, криспи лук, кетчуп,
                        соус сырный, горчица, зелень </div>
                    <div class="products-item-extra">
                        <div class="products-item-info">
                            <div class="products-item-price">9 $</div>
                            <div class="products-item-weight">320 g</div>
                        </div>
                        <div class="products-item-action">
                            <button class="button product-button">
                                <span>Заказать</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                            fill="#191411" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/7.png" alt="burger7">
                    </div>
                    <div class="products-item-title">
                        Вегги бургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, вегетарианская котлета, красный лук, сыр, свежий томат, соус барбекю, соус
                        сырный, салат айсберг
                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">8 $</div>
                                <div class="products-item-weight">280 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/8.png" alt="burger8">
                    </div>
                    <div class="products-item-title">
                        Плаксивый Джо
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, говяжья котлета, грудинка, помидор, огурец маринованный, красный лук, сыр,
                        перец халапеньо, кетчуп, зелень
                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">7 $</div>
                                <div class="products-item-weight">380 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/9.png" alt="burger9">
                    </div>
                    <div class="products-item-title">
                        Двойной чиз бургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, две говяжьи котлеты, двойной сыр чеддар, огурец маринованный, криспи
                        лук,
                        кетчуп, соус сырный, горчица, зелень
                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">11 $</div>
                                <div class="products-item-weight">400 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/10.png" alt="burger10">
                    </div>
                    <div class="products-item-title">
                        Фрешбургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, говяжья котлета, бекон, сыр чеддар, яйцо, салями, соус барбекю,
                        соус сырный, салат айсберг, свежий томат
                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">9 $</div>
                                <div class="products-item-weight">300 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/11.png" alt="burger11">
                    </div>
                    <div class="products-item-title">
                        Цуккини бургер
                    </div>
                    <div class="products-item-text">
                        Булочка для бургера, вегетарианская котлета из нута, цуккини на гриле,
                        помидор, огурец маринованный, сыр, горчичный соус, кетчуп, зелень

                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">8 $</div>
                                <div class="products-item-weight">320 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item">
                    <div class="products-item-image">
                        <img src="images/12.png" alt="burger12">
                    </div>
                    <div class="products-item-title">
                        Двойной бургер чеддар </div>
                    <div class="products-item-text">
                        Булочка для бургера, котлета говяжья, грудинка, красный лук, огурец
                        маринованный, томат, кетчуп, двойной сыр чеддар, горчица, зелень
                        <div class="products-item-extra">
                            <div class="products-item-info">
                                <div class="products-item-price">9 $</div>
                                <div class="products-item-weight">360 g</div>
                            </div>
                            <div class="products-item-action">
                                <button class="button product-button">
                                    <span>Заказать</span>
                                    <span>
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z"
                                                fill="#191411" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="order">
        <div class="container">
            <div class="order-title common-title"></div>
            <img src="images/order_image.png" alt="order-img" class="order-image">
            <div class="order-form">
                <div class="order-form-text">Заполните все данные и наш менеджер свяжется с вами для подтверждения
                    заказа</div>
                <div class="order-form-inputs">
                    <div class="order-form-input">
                        <input type="text" placeholder="Ваш заказ">
                    </div>
                    <div class="order-form-input">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="order-form-input">
                        <input type="text" placeholder="Ваш телефон">
                    </div>
                    <button class="button">Оформить заказ</button>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="logo">
                <img src="images/Logo.png" alt="logo">
            </div>
            <div class="rights">Все права защищены</div>
        </div>
    </footer>

    <div class="hystmodal hystmodal--simple" id="loginModal" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window hystmodal__window--form" role="dialog" aria-modal="true">
                <button class="hystmodal__close" data-hystclose>Закрыть</button>
                <div class="hystmodal__styled">
                    <div class="loginblock__h1">Modal form example</div>
                    <form action="#" method="POST">
                        <div class="formitem">
                            <input type="text" name="username" placeholder="Your name" value="">
                        </div>
                        <div class="formitem">
                            <input type="email" name="username" placeholder="Your E-mail" value="">
                        </div>
                        <div class="formitem">
                            <input type="password" name="username" placeholder="Enter password" value="">
                        </div>
                        <div class="loginblock__bottom flexi">
                            <label class="formcheckbox">
                                <input type="checkbox" name="remember" tabindex="0">
                                <span class="flexi"><i class="checkplace"><img src="https://addmorescripts.github.io/hystModal/img/check.svg" alt=""></i>Remember me</span>
                            </label>
                            <a href="#" class="loginblock__link">Forget Password</a>
                        </div>
                        <div class="formsubmit">
                            <button type="submit" class="button" onclick="alert('All is OK.'); return false;">Submit Form (example)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/hystmodal.min.js"></script>
    <script>
        const myModal = new HystModal({
            catchFocus: true,
            closeOnEsc: true,
            backscroll: true,
            beforeOpen: function(modal){

            },
            afterClose: function(modal){

            },
        });

        async function loadUsers(){
            const response = await fetch('/api/users.php?method=users');
            const names = await response.json();
            console.log(names);
        }
        loadUsers();
    </script>
</body>

</html>