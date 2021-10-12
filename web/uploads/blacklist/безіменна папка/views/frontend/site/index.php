<div class="background">
    <main class="main container">
        <section class="first">
            <div class="first__wrapper">
                <div class="choose_service__title">
                    <p class="service__title"
                       data-text-1="<?php echo Lang::t('Проверить номер'); ?>"
                       data-text-2="<?php echo Lang::t('Проверить организацию'); ?>"
                       data-text-3="<?php echo Lang::t('Добавить номер в черный список'); ?>"
                       data-text-4="<?php echo Lang::t('Добавить организацию в черный список'); ?>"
                    ><?php echo Lang::t('Проверить номер'); ?></p>
                </div>
                <div class="choose_service__choose">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-secret" class="svg-inline--fa fa-user-secret fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z"></path></svg>
                    <label class="switch">
                        <input type="radio" name="choose" value="1" checked="1">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="choose_service__choose">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tie" class="svg-inline--fa fa-user-tie fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"></path></svg>
                    <label class="switch">
                        <input type="radio" name="choose" value="2">
                        <span class="slider round"></span>
                    </label>
                </div>
                <form method="POST">
                </form>
            </div>
        </section>

        <section class="second">
            <div class="second_wrapper">
                <form action="" class="form" onsubmit="return false;">
                    <select>
                        <option value="ua">+38</option>
                        <option value="usa">+1</option>
                        <option value="ru">+7</option>
                    </select>
                    <input type="text" name="number" placeholder="(099) 99 99 999" id="phone_to_find">
                    <button type="submit" id="check_phone_btn">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                    </button>
                </form>
                <form action="" class="form draft" onsubmit="return false;">
                    <select>
                        <option value="ua">ua</option>
                        <option value="usa">usa</option>
                        <option value="ru">ru</option>
                    </select>
                    <input type="text" name="name" placeholder="<?php echo Lang::t('ФЛП Андриенко В. П.'); ?>">
                    <button type="submit">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                    </button>
                </form>
                <form action="" class="form draft" onsubmit="return false;">
                    <select>
                        <option value="ua">+38</option>
                        <option value="usa">+1</option>
                        <option value="ru">+7</option>
                    </select>
                    <input type="text" name="number" placeholder="(099) 999 99 99" class="mask">
                    <button type="submit">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" class="svg-inline--fa fa-ban fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"></path></svg>
                    </button>
                </form>
                <form action="" class="form draft" onsubmit="return false;">
                    <select>
                        <option value="ua">ua</option>
                        <option value="usa">usa</option>
                        <option value="ru">ru</option>
                    </select>
                    <input type="text" name="name" placeholder="<?php echo Lang::t('ФЛП Андриенко В. П.'); ?>">
                    <button type="submit">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" class="svg-inline--fa fa-ban fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"></path></svg>
                    </button>
                </form>
                <div class="second_result draft">
                    <div id="testDiv"></div>
<!--                    <div class="result__item">-->
<!--                        <svg class="result__item_img svg-inline--fa fa-user-secret fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-secret" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z"></path></svg>-->
<!--                        <div class="result__comments_text">-->
<!--                            <p class="result__item_name">Просто гамнюк</p>-->
<!--                            <p class="result__item_phone">+38 (099) 999 99 99</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="result_comments">-->
<!--                        <div class="result__comments_add">-->
<!--                            <p id="add_btn">Додайте свій коментар</p>-->
<!--                            <textarea id="new_comment" class="draft"></textarea><br>-->
<!--                            <input type="submit" id="ok_btn" value="Ok" class="draft new_comment_btn">-->
<!--                            <input type="submit" id="close_btn" value="X" class="draft new_comment_btn">-->
<!--                        </div>-->
<!--                        <div class="result__comment">-->
<!--                            <div class="result__comments_top">-->
<!--                                <svg class="result__item_img svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>-->
<!--                                <div>-->
<!--                                    <p class="result__comments_name">Анонім</p>-->
<!--                                    <p class="result__comments_date">22-04-2020</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <p class="result__comments_message">Обманює, поводиться агресивно</p>-->
<!--                        </div>-->
<!--                        <div class="result__comment">-->
<!--                            <div class="result__comments_top">-->
<!--                                <svg class="result__item_img svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>-->
<!--                                <div>-->
<!--                                    <p class="result__comments_name">Анонім</p>-->
<!--                                    <p class="result__comments_date">22-04-2020</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <p class="result__comments_message">Набридає</p>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </section>

        <section class="thrid">
            <div class="thrid_wrapper">
                <p id="hide_section">&#62;</p>
                <p id="open_section" class="draft">&#60;</p>

                <p class="thrid__title"><?php echo Lang::t('Антирейтинг'); ?></p>

                <?php foreach ($phoneList as $phones):?>
                <div class="thrid__item">
                        <svg class="thrid__item_img svg-inline--fa fa-user-secret fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-secret" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z"></path></svg>
                        <div class="thrid__comments_text">
                            <p class="thrid__item_name"><?php echo $phones['title'];?></p>
                            <p class="thrid__item_phone"><?php echo $phones['phone'];?></p>
                            <p class="thrid__item_name"><?php echo Lang::t('Последний комментарий'); ?>:</p>
                            <p class="thrid__item_phone"><?php echo Page::getLastReviewByPhoneId($phones['id'])['text'];?></p>
                            <p><?php echo Lang::t('Жалобы'); ?>: <?php echo $phones['mentions_counter'];?></p>
                        </div>
                </div>
                <?php endforeach;?>

            </div>
        </section>
    </main>
</div>