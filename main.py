import pandas as pd 

data = pd.read_csv('data.csv')
# print(data['name'])
# print(data['image'][0])
with open('myfile.html', 'w') as html:
    for i in range(0,18):
        acmdt = '''
        <div class="pack_incl_grp">
            <ion-icon name="home"></ion-icon><br>
            <div class="incl_name">Accomodation</div>
        </div>
        '''
        Flight = '''
        <div class="pack_incl_grp">
            <ion-icon name="airplane"></ion-icon><br>
            <div class="incl_name">Flight</div>
        </div>
        ''' 
        food = '''
        <div class="pack_incl_grp">
            <ion-icon name="fast-food"></ion-icon><br>
            <div class="incl_name">Meal</div>
        </div>
        '''


        my_code = f'''
        <div class="package_card">
                <!-- <div class="hr_div"></div> -->
                <div class="pack_content">
                    <div class="pack_img"><img src="/assests/packages/{data['image id'][i]}.jpg" alt=""></div>
                    <div class="pack_desc_main">
                        <div class="pack_name">{data['name'][i]}</div>
                        <div class="pack_dur">{data['duration'][i]}</div>
                        <div class="pack_desc">
                            {data['desc'][i][:150]}....
                        </div>
                        <div class="pack_bottom">
                            <div class="pack_incl">
                                {food if bool(data['meals'][i]) else ''}
                                {Flight if bool(data['flight'][i]) else ''}
                                {acmdt if bool(data['accomodation'][i]) else ''}
                            </div>
                        </div>
                    </div>
                    <div class="pack_side_bar">
                        <div class="pack_price">
                            &#x20B9;{data['price'][i]}
                            <div>Per Person On Twin Sharin</div>	
                        </div>
                        <div class="buy_button">
                            <a href="package/package_{data['image id'][i]}.html"><button type="button">Buy Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        '''
        html.write(my_code)