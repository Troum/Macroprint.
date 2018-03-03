@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH">
                    <div style="width: 26%">НОВОСТИ ПЕЧАТИ</div>
                </h3>
                <div class="col-sm-12" style="margin-bottom: 64px">
                    <div class="newsCard col-sm-12">
                        <div class="row">
                            <div class="col-sm-8 newsHeader">
                                Колейдоскоп технологий
                            </div>
                            <div class="col-sm-4 newsDate">
                                Опубликовано
                                <br>
                                12 декабря 2017
                            </div>
                        </div>
                        <img class="col-sm-5 newsCardImg" align="left" src="{{asset('/img/cntnOld.png')}}" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin nibh tellus, eget molestie ligula scelerisque non. Praesent non luctus felis. Praesent pellentesque libero fringilla lobortis fringilla. Sed non ligula justo. Vivamus mattis leo mi, non convallis urna vestibulum vel. Integer in augue nec nulla blandit tempor. Pellentesque auctor arcu sem, eget accumsan dui iaculis nec. Mauris sagittis sit amet elit eu ullamcorper. Nunc pellentesque tempus urna, sed interdum nunc. Donec congue nisi eu porta sagittis. Donec blandit iaculis ipsum, hendrerit finibus leo iaculis sed.
                        </p>
                        <p>
                            Phasellus lorem justo, pellentesque quis felis id, varius ullamcorper mauris. Etiam aliquet rhoncus maximus. Nulla facilisi. Nullam ultrices id augue at consectetur. Suspendisse vehicula ac massa et vehicula. In tincidunt in massa ac sodales. Pellentesque lacinia dui ac lacus auctor faucibus. Maecenas non orci rhoncus, tincidunt massa ut, fermentum neque. Sed ut neque quis odio gravida condimentum eu ac ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras id pulvinar dui. Phasellus vehicula volutpat ante a vehicula. In gravida non diam elementum accumsan.
                        </p>
                        <div class="col-sm-4 col-sm-offset-8 taR R sL">
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path d="M19.54,14.6C21.09,16.04 21.41,16.73 21.46,16.82C22.1,17.88 20.76,17.96 20.76,17.96L18.18,18C18.18,18 17.62,18.11 16.9,17.61C15.93,16.95 15,15.22 14.31,15.45C13.6,15.68 13.62,17.23 13.62,17.23C13.62,17.23 13.62,17.45 13.46,17.62C13.28,17.81 12.93,17.74 12.93,17.74H11.78C11.78,17.74 9.23,18 7,15.67C4.55,13.13 2.39,8.13 2.39,8.13C2.39,8.13 2.27,7.83 2.4,7.66C2.55,7.5 2.97,7.5 2.97,7.5H5.73C5.73,7.5 6,7.5 6.17,7.66C6.32,7.77 6.41,8 6.41,8C6.41,8 6.85,9.11 7.45,10.13C8.6,12.12 9.13,12.55 9.5,12.34C10.1,12.03 9.93,9.53 9.93,9.53C9.93,9.53 9.94,8.62 9.64,8.22C9.41,7.91 8.97,7.81 8.78,7.79C8.62,7.77 8.88,7.41 9.21,7.24C9.71,7 10.58,7 11.62,7C12.43,7 12.66,7.06 12.97,7.13C13.93,7.36 13.6,8.25 13.6,10.37C13.6,11.06 13.5,12 13.97,12.33C14.18,12.47 14.7,12.35 16,10.16C16.6,9.12 17.06,7.89 17.06,7.89C17.06,7.89 17.16,7.68 17.31,7.58C17.47,7.5 17.69,7.5 17.69,7.5H20.59C20.59,7.5 21.47,7.4 21.61,7.79C21.76,8.2 21.28,9.17 20.09,10.74C18.15,13.34 17.93,13.1 19.54,14.6Z"/>
                                </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/>                            </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M17.83,12.74C17.55,12.17 16.76,11.69 15.71,12.5C14.28,13.64 12,13.64 12,13.64C12,13.64 9.72,13.64 8.29,12.5C7.24,11.69 6.45,12.17 6.17,12.74C5.67,13.74 6.23,14.23 7.5,15.04C8.59,15.74 10.08,16 11.04,16.1L10.24,16.9C9.1,18.03 8,19.12 7.25,19.88C6.8,20.34 6.8,21.07 7.25,21.5L7.39,21.66C7.84,22.11 8.58,22.11 9.03,21.66L12,18.68C13.15,19.81 14.24,20.9 15,21.66C15.45,22.11 16.18,22.11 16.64,21.66L16.77,21.5C17.23,21.07 17.23,20.34 16.77,19.88L13.79,16.9L13,16.09C13.95,16 15.42,15.73 16.5,15.04C17.77,14.23 18.33,13.74 17.83,12.74M12,4.57C13.38,4.57 14.5,5.69 14.5,7.06C14.5,8.44 13.38,9.55 12,9.55C10.62,9.55 9.5,8.44 9.5,7.06C9.5,5.69 10.62,4.57 12,4.57M12,12.12C14.8,12.12 17.06,9.86 17.06,7.06C17.06,4.27 14.8,2 12,2C9.2,2 6.94,4.27 6.94,7.06C6.94,9.86 9.2,12.12 12,12.12Z"/>                            </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/>                            </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 newsSepar"></div>
                    <div class="newsCard col-sm-12">
                        <div class="row">
                            <div class="col-sm-8 newsHeader">
                                Стартовало бета-тестирование HP PAGEWIDE C500 PRESS
                            </div>
                            <div class="col-sm-4 newsDate">
                                Опубликовано
                                <br>
                                12 декабря 2017
                            </div>
                        </div>
                        <img class="col-sm-5 newsCardImg" align="left" src="{{asset('/img/cntnOld.png')}}" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin nibh tellus, eget molestie ligula scelerisque non. Praesent non luctus felis. Praesent pellentesque libero fringilla lobortis fringilla. Sed non ligula justo. Vivamus mattis leo mi, non convallis urna vestibulum vel. Integer in augue nec nulla blandit tempor. Pellentesque auctor arcu sem, eget accumsan dui iaculis nec. Mauris sagittis sit amet elit eu ullamcorper. Nunc pellentesque tempus urna, sed interdum nunc. Donec congue nisi eu porta sagittis. Donec blandit iaculis ipsum, hendrerit finibus leo iaculis sed.
                        </p>
                        <p>
                            Phasellus lorem justo, pellentesque quis felis id, varius ullamcorper mauris. Etiam aliquet rhoncus maximus. Nulla facilisi. Nullam ultrices id augue at consectetur. Suspendisse vehicula ac massa et vehicula. In tincidunt in massa ac sodales. Pellentesque lacinia dui ac lacus auctor faucibus. Maecenas non orci rhoncus, tincidunt massa ut, fermentum neque. Sed ut neque quis odio gravida condimentum eu ac ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras id pulvinar dui. Phasellus vehicula volutpat ante a vehicula. In gravida non diam elementum accumsan.
                        </p>
                        <div class="col-sm-4 col-sm-offset-8 taR R sL">
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path d="M19.54,14.6C21.09,16.04 21.41,16.73 21.46,16.82C22.1,17.88 20.76,17.96 20.76,17.96L18.18,18C18.18,18 17.62,18.11 16.9,17.61C15.93,16.95 15,15.22 14.31,15.45C13.6,15.68 13.62,17.23 13.62,17.23C13.62,17.23 13.62,17.45 13.46,17.62C13.28,17.81 12.93,17.74 12.93,17.74H11.78C11.78,17.74 9.23,18 7,15.67C4.55,13.13 2.39,8.13 2.39,8.13C2.39,8.13 2.27,7.83 2.4,7.66C2.55,7.5 2.97,7.5 2.97,7.5H5.73C5.73,7.5 6,7.5 6.17,7.66C6.32,7.77 6.41,8 6.41,8C6.41,8 6.85,9.11 7.45,10.13C8.6,12.12 9.13,12.55 9.5,12.34C10.1,12.03 9.93,9.53 9.93,9.53C9.93,9.53 9.94,8.62 9.64,8.22C9.41,7.91 8.97,7.81 8.78,7.79C8.62,7.77 8.88,7.41 9.21,7.24C9.71,7 10.58,7 11.62,7C12.43,7 12.66,7.06 12.97,7.13C13.93,7.36 13.6,8.25 13.6,10.37C13.6,11.06 13.5,12 13.97,12.33C14.18,12.47 14.7,12.35 16,10.16C16.6,9.12 17.06,7.89 17.06,7.89C17.06,7.89 17.16,7.68 17.31,7.58C17.47,7.5 17.69,7.5 17.69,7.5H20.59C20.59,7.5 21.47,7.4 21.61,7.79C21.76,8.2 21.28,9.17 20.09,10.74C18.15,13.34 17.93,13.1 19.54,14.6Z"/>
                                </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/>                            </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M17.83,12.74C17.55,12.17 16.76,11.69 15.71,12.5C14.28,13.64 12,13.64 12,13.64C12,13.64 9.72,13.64 8.29,12.5C7.24,11.69 6.45,12.17 6.17,12.74C5.67,13.74 6.23,14.23 7.5,15.04C8.59,15.74 10.08,16 11.04,16.1L10.24,16.9C9.1,18.03 8,19.12 7.25,19.88C6.8,20.34 6.8,21.07 7.25,21.5L7.39,21.66C7.84,22.11 8.58,22.11 9.03,21.66L12,18.68C13.15,19.81 14.24,20.9 15,21.66C15.45,22.11 16.18,22.11 16.64,21.66L16.77,21.5C17.23,21.07 17.23,20.34 16.77,19.88L13.79,16.9L13,16.09C13.95,16 15.42,15.73 16.5,15.04C17.77,14.23 18.33,13.74 17.83,12.74M12,4.57C13.38,4.57 14.5,5.69 14.5,7.06C14.5,8.44 13.38,9.55 12,9.55C10.62,9.55 9.5,8.44 9.5,7.06C9.5,5.69 10.62,4.57 12,4.57M12,12.12C14.8,12.12 17.06,9.86 17.06,7.06C17.06,4.27 14.8,2 12,2C9.2,2 6.94,4.27 6.94,7.06C6.94,9.86 9.2,12.12 12,12.12Z"/>                            </svg>
                            </div>
                            <div class="btn-social vk">
                                <svg width="20" height="24" viewBox="0 0 26 26" fill="#979797">
                                    <path xmlns="http://www.w3.org/2000/svg" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/>                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection