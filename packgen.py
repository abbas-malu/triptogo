import pandas as pd 

data = pd.read_csv('data.csv')
# print(data['name'])
# print(data['image'][0])
with open('myfile.html', 'w') as html:
    for i in range(0,18):
        acmdt = '''
        <div class="package_incl_grp">
            <ion-icon name="home"></ion-icon><br>
            <div class="package_incl_name">Accomodation</div>
        </div>
        '''
        Flight = '''
        <div class="package_incl_grp">
            <ion-icon name="airplane"></ion-icon><br>
            <div class="package_incl_name">Flight</div>
        </div>
        ''' 
        food = '''
        <div class="package_incl_grp">
            <ion-icon name="fast-food"></ion-icon><br>
            <div class="package_incl_name">Meal</div>
        </div>
        '''
        mycode = '''

        '''
for i in range(0,18):
    acmdt = '''
    <div class="package_incl_grp">
        <ion-icon name="home"></ion-icon><br>
        <div class="package_incl_name">Accomodation</div>
    </div>
    '''
    Flight = '''
    <div class="package_incl_grp">
        <ion-icon name="airplane"></ion-icon><br>
        <div class="package_incl_name">Flight</div>
    </div>
    ''' 
    food = '''
    <div class="package_incl_grp">
        <ion-icon name="fast-food"></ion-icon><br>
        <div class="package_incl_name">Meal</div>
    </div>
    '''
    mycode = f'''
<!DOCTYPE html>
<html lang="en">
<!--head starts-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{data['name'][i]} | Trip To Go</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
</head>
<!--head ends-->

<!--body starts-->

<body>
    <!--   navbar-->
    <header>
        <div class="nav">
            <div class="nav-logo">
                <img src="assests/logo/small.png" alt="">
                <div class="nav_brand"><span class="T1">T</span>rip <span class="T2">T</span>o <span class="G">G</span>o
                </div>
            </div>
            <div class="nav-item-group">
                <ul class="nav-list">
                    <a href="/index.html">
                        <li class="nav-item">Home</li>
                    </a>
                    <a href="/packages.html">
                        <li class="nav-item active">Packages</li>
                    </a>
                    <a href="/about.html">
                        <li class="nav-item ">About Us</li>
                    </a>
                    <a href="/contact.html">
                        <li class="nav-item">Contact Us</li>
                    </a>
                </ul>
            </div>
            <div class="nav-search-group">
                <input type="text" name="search" id="search" placeholder="Search Packages">
                <button type="button" class="btn">Search</button>
            </div>
        </div>
    </header>
    <div class="padding"></div>
    <!--    navbar ends-->
    <div class="package_container">
        <div class="package_name">{data['name'][i]}</div>
        <div class="hr_div"></div>
        <div class="package_image">
            <img src="assests/packages/{data['image id'][i]}.jpg" alt="">
        </div>
        <div class="package_desc">
            {data['desc'][i]}
        </div>
        <div class="package_inculsion">
            {food if bool(data['meals'][i]) else ''}
            {Flight if bool(data['flight'][i]) else ''}
            {acmdt if bool(data['accomodation'][i]) else ''}
        </div>
        <div class="package_duration">
           Duration: {data['duration'][i]}
        </div>
        <div class="price">
           <button type="button"> Book Now For Only &#x20B9; {data['price'][i]}</button>
        </div>
    </div>
    <!--    footer starts-->
    <footer class="footer">
        <div class="foot">
            <div class="foot_brand">
                <div class="foot_logo">
                    <img src="/assests/logo/large.png" alt="">
                </div>
                <div class="foot_heading">
                    <div class="nav_brand"><span class="T1">T</span>rip <span class="T2">T</span>o <span
                            class="G">G</span>o</div>
                </div>
            </div>
            <div class="follow_us">
                Follow Us Social Media<br><br>
                <ul class="social_follow">
                    <li class="instagram">
                        <a href="https://www.instagram.com/?hl=en">
                            <ion-icon name="logo-instagram"></ion-icon>&nbsp;
                            <span class="social_text">Instagram</span>
                        </a>
                    </li>
                    <li class="facebook">
                        <a href="https://www.facebook.com/">
                            <ion-icon name="logo-facebook"></ion-icon>&nbsp;
                            <span class="social_text">Facebook</span>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/">
                            <ion-icon name="logo-twitter"></ion-icon>&nbsp;
                            <span class="social_text">Twitter</span>
                        </a>
                    </li>
                    <li class="pinterest">
                        <a href="https://in.pinterest.com/">
                            <ion-icon name="logo-pinterest"></ion-icon>&nbsp;
                            <span class="social_text">Pinterest</span>
                        </a>
                    </li>
                    <li class="whatsapp">
                        <a href="https://web.whatsapp.com/">
                            <ion-icon name="logo-whatsapp"></ion-icon>&nbsp;
                            <span class="social_text">Whatsapp</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="subs_newsletter">
                <div class="newsletter_heading">
                    Subscribe To Our Newsletter
                </div>
                <div class="newsletter_input">
                    <input type="email" placeholder="Your Email Here">
                </div>
                <div class="newsletter_button">
                    <button type="button">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="copywright">
            <span>&copy;</span> 2020 Trip To Go. All Rights Reserved.
        </div>
    </footer>
    <!--    footer ends-->
</body>
<!--body ends-->

</html>
    '''
    with open(f"package/package_{data['image id'][i]}.html", 'w') as html:
        html.write(mycode)