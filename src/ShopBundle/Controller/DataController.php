<?php

namespace ShopBundle\Controller;

class DataController {
    
    static public $data = [
        'categories' => [
            [
                'id' => 1,
                'title' => 'Computers',
            ], 
            [
                'id' => 2,
                'title' => 'Cell phones',
            ],
            [
                'id' => 3,
                'title' => 'Laptops',
            ],
            [
                'id' => 4,
                'title' => 'Accessories',
            ],
            [
                'id' => 5,
                'title' => 'Software',
            ],
        ],
        
        'products' => [
            [
                'id' => 1,
                'category_id' => 2,
                'title' => 'iPhone 7',
                'description' => "iPhone (/ˈaɪfoʊn/ EYE-fohn) is a line of smartphones designed and marketed by Apple Inc. They run Apple's iOS mobile operating system. The first generation iPhone was released on June 29, 2007, and there have been multiple new hardware iterations with new iOS releases since.",
                'price' => 650,
                'rating' => 4,
                'comments' => [
                    'Very good product. Recommend it.',
                    'Best quality!',
                    'Recommend',
                ]
            ], 
            [
                'id' => 2,
                'category_id' => 2,
                'title' => 'iPhone 7 Plus',
                'description' => "The user interface is built around the device's multi-touch screen, including a virtual keyboard. The iPhone has Wi-Fi and can connect to cellular networks. An iPhone can shoot video (though this was not a standard feature until the iPhone 3GS), take photos, play music, send and receive email, browse the web, send and receive text messages, follow GPS navigation, record notes, perform mathematical calculations, and receive visual voicemail. Other functionality, such as video games, reference works, and social networking, can be enabled by downloading mobile apps. As of January 2017, Apple's App Store contained more than 2.2 million applications available for the iPhone",
                'price' => 750,
                'rating' => 5,
                'comments' => [
                    'Very good product. Recommend it.',
                    'Best quality!',
                    'Recommend'
                ]
            ], 
            [
                'id' => 3,
                'category_id' => 2,
                'title' => 'iPhone 8',
                'description' => "Apple has released ten generations of iPhone models, each accompanied by one of the ten major releases of the iOS operating system. The original 1st-generation iPhone was a GSM phone and established design precedents, such as a button placement that has persisted throughout all releases and a screen size maintained for the next four iterations. The iPhone 3G added 3G network support, and was followed by the 3GS with improved hardware, the 4 with a metal chassis, higher display resolution and front-facing camera, and the 4S with improved hardware and the voice assistant Siri. The iPhone 5 featured a taller, 4-inch display and Apple's newly introduced Lightning connector. In 2013, Apple released the 5S with improved hardware and a fingerprint reader, and the lower-cost 5C, a version of the 5 with colored plastic casings instead of metal. They were followed by the larger iPhone 6, with models featuring 4.7 and 5.5-inch displays. The iPhone 6S was introduced the following year, which featured hardware upgrades and support for pressure-sensitive touch inputs, as well as the SE—which featured hardware from the 6S but the smaller form factor of the 5S. In 2016, Apple unveiled the iPhone 7 and 7 Plus, which add water resistance, improved system and graphics performance, a new rear dual-camera setup on the Plus model, and new color options, while removing the 3.5 mm headphone jack found on previous models. The iPhone 8 and 8 Plus were released in 2017, adding a glass back and an improved screen and camera. The iPhone X was released alongside the 8 and 8 Plus, with its highlights being a near bezel-less design, an improved camera and a new facial recognition system, named Face ID, but having no home button, and therefore, no Touch ID.",
                'price' => 800,
                'rating' => 5,
            ], 
            [
                'id' => 4,
                'category_id' => 2,
                'title' => 'iPhone 8+',
                'description' => "The original iPhone was described as revolutionary and a game-changer for the mobile phone industry. Newer iterations have also garnered praise, and the iPhone's success has been credited with helping to make Apple one of the world's most valuable publicly traded companies.",
                'price' => 800,
                'rating' => 4,
            ], 
            [
                'id' => 5,
                'category_id' => 2,
                'title' => 'iPhone 8',
                'description' => "Development of what was to become the iPhone began in 2004, when Apple started to gather a team of 1,000 employees to work on the highly confidential [15] including Jonathan Ive, the designer behind the iMac and iPod.[16] Apple CEO Steve Jobs steered the original focus away from a tablet (which Apple eventually revisited in the form of the iPad) and towards a phone.[17] Apple created the device during a secretive collaboration with Cingular Wireless (now AT&T Mobility) at the time—at an estimated development cost of US$150 million over thirty months",
                'price' => 800,
                'rating' => 5,
            ], 
            [
                'id' => 7,
                'category_id' => 3,
                'title' => 'MacBook Pro',
                'description' => "Jobs unveiled the iPhone to the public on January 9, 2007, at the Macworld 2007 convention at the Moscone Center in San Francisco.[25] The two initial models, a 4 GB model priced at US$499 and an 8 GB model at US$599 (both requiring a 2-year contract), went on sale in the United States on June 29, 2007, at 6:00 pm local time, while hundreds of customers lined up outside the stores nationwide.[26] The passionate reaction to the launch of the iPhone resulted in sections of the media dubbing it the 'Jesus phone'.[27][28] Following this successful release in the US, the first generation iPhone was made available in the UK, France, and Germany in November 2007, and Ireland and Austria in the spring of 2008",
                'price' => 2399,
                'rating' => 5,
            ], 
            [
                'id' => 8,
                'category_id' => 3,
                'title' => 'MacBook Air',
                'description' => "The touchscreen on the first five generations is a 9 cm (3.5 in) liquid crystal display with scratch-resistant glass, while the one on the iPhone 5 is 4 inches.[8] The capacitive touchscreen is designed for a bare finger, or multiple fingers for multi-touch sensing. The screens on the first three generations have a resolution of 320×480 (HVGA) at 163 ppi; those on the iPhone 4 and iPhone 4S have a resolution of 640×960 at 326 ppi; the 4-inch models, with 640×1136 at 326 ppi; the 4.7-inch models, with 750×1334 at 326 ppi; and the 5.5-inch models, with 1080×1920 at 401 ppi. The initial models were using twisted-nematic (TN) LCDs. Starting with iPhone 4, the technology was changed to in-plane switching (IPS) LCDs. The iPhone 5 model's screen results in an aspect ratio of approximately 16:9. The iPhone X is the first iPhone to use an OLED display. It has a near bezel-less screen with a ~19.5:9 aspect ratio",
                'price' => 1599,
                'rating' => 3,
            ], 
        ]
    ];
    
}