// San Francisco Surfrider Foundation

const sf2= {co:"Surfrider Foundation", 
            title:"Chair, Volunteer Coordnator & Creative Strategist", 
            date: "(2109-present)", 
            desc_00:"Coordinate and lead the Executive Committee of one of the largest chapters of a grassroots environmental organization dedicated to keeping our ocean, waves, and beaches clean for all to enjoy. Guided the creation of annual budgets, agendas, and yearly plans for nine programs with a focus on community outreach, activism, policy initiatives, and volunteer retention.",
            desc_01:"Migrated website content from WordPress to Hubspot platform." };

const sf2Acomplir = ["Implemented and revitalized outreach programs to attract corporate sponsors, high-profile donors, and community members. Consistent and focused messaging led to a 28% growth in membership.", 
                     "Partnered with local businesses and corporations to strengthen brand awareness, drive member acquisition and retention, and increase donation volumes.", 
                     "Collaborated with activists, board members, and affiliates to identify and define the strategic vision for the national 501(c)(3)."];            
// Does this solve my single point of truth problem             
            
document.getElementById("Surfrider").innerHTML = 
    "<h3>" + sf2.co + "&mdash;" + sf2.title + "</h3>" + "<p>" + sf2.date + "&nbsp;"  + sf2.desc_00 + "</p>" + "<p>" + sf2.desc_01 + "</p>";

// Ready State

const readyState = {co:"Ready State", 
                    title:"Senior Designer", 
                    date:"(2021-2022)", 
                    desc: "Conceptulized and generated a variety of media from concept to final execution with teams from Amazon, Instacart, Markforged, Snowflake, and Torani. Edited video and created strategic content for blogs, social media, and marketing materials."};
const rsAcomplir = ["Contributed to design critiques and collaborated with the internal creative team across various disciplines to stay on top of digital trends, maintain best practices, and build community amongst the design team.", 
                    "Created image standards based on inspiration and previously created work. The guidelines allowed for faster iteration and fewer edits to client-requested graphics."];
const rsAmazon = {co:"Amazon FireTV", 
                  desc:"Worked with project managers, strategists, and copywriters to develop on-screen promotions and content encouraging FireTV users to upgrade their devices and increase awareness of specific types of programming."};
const rsInstacart = {co:"Instacart", 
                     desc:"The campaign aimed to educate potential shoppers on why they should choose Instacart and what sets IC apart from other grocery delivery and pickup services. I worked with stakeholders to create and present the Instagram social media campaign encouraging potential shoppers to sign up."};

document.getElementById("ReadyState").innerHTML = 
    "<h3>" + readyState.co + "&mdash;" + readyState.title + "</h3>" + "<p>" + readyState.date + "&nbsp;"  + readyState.desc + "</p>";

document.getElementById("AmazonFireTV").innerHTML = "<h3>" + rsAmazon.co + "</h3>" + "<p>" + rsAmazon.desc + "</p>";
document.getElementById("Inscart").innerHTML = "<h3>" + rsInstacart.co + "</h3>" + "<p>" + rsInstacart.desc + "</p>";

// Tone Oliver & Real California Milk

const rcm = {co:"Real California Milk", 
             title: "Editor", 
             date: "(2021)", 
             desc:"Partnered with Tone Oliver Productions to create the video series promoting Real California Milk and local chefs. Responsible for editing and assembling recorded raw material into a suitable, finished product ready for broadcasting. The material included camera footage, interviews, sound effects, graphics and special effects."};
                            
document.getElementById("RealCaliforniaMilk").innerHTML = 
    "<h3>" + rcm.co + "&nbsp;" + "&mdash;" + "&nbsp;" + rcm.title + "</h3>" + "<p>" + rcm.date + "&nbsp;" + rcm.desc + "</p>";

// Tag @ Union Bank 

const tag = {co:"Tag @ Union Bank", 
             title:"Art Director", 
             date:"(2016-2020)", 
             desc:"Served as brand steward and directed designers, production artists, copywriters, and specialists to ensure consistency for 360 marketing campaigns. Delivered collateral and assets across channels and mediums on schedule according to specifications."};
const tagAcomplir = ["Created campaign concepts and end-to-end assets for email, landing pages, digital signage, print, and packaging materials. Product marketing campaigns yielded a 200% - 400% increase in applications and approvals for various products.", 
                     "Developed emails, mock-ups, redlines, templates, and specs that adhered to UX / UI standards, accessibility, and corporate guidelines resulting in a 75% reduction in the time required to deliver final assets. The improved efficiency of asset delivery allowed for strategic and design thinking around email campaigns.", 
                     "Introduced concepts for high visibility products (credit cards and car wraps) and marketing strategies (home loans and mortgage products) to C-suite and decision-makers. Increased the overall business and grew the agency statement of work by leveraging the internal team capabilities.", 
                     "Managed files and cloud repositories using Microsoft OneDrive, allowing for greater transparency and smoother handoff of mechanical files throughout the entire design process."];

                            
document.getElementById("TagUnionBank").innerHTML = 
    "<h3>" + tag.co + "&mdash;" + tag.title + "</h3>" + "<p>" + tag.date + "&nbsp;"  + tag.desc + "</p>";

// Blue Marketing

const bleu = {co:"Bleu Marketing Inc.", 
              title:"Art Director", 
              date:"(2016)", 
              desc_00:"Collaborated with clients and project leads to determine opportunities, goals, style, and tone for media campaigns. Communicated a vision and strategy to designers, illustrators, copywriters, and other artists. Approved artwork and delivered client presentations to review and finalize products.", 
              desc_01:"Dell EMC and the Hybrid Cloud provides the foundation to help companies modernize, automate, and transform data centers by innovating across devices, ecosystems and services to design solutions for the way people work.",
              desc_02:"Identified audience, messaging, stories, and statistics, to develop a cohesive launch campaign that adhered to brand guidelines. Digital content and collateral was designed to highlight metrics that influence CFO decision making."};

document.getElementById("BleuMarketing").innerHTML = 
    "<h3>" + bleu.co + "&mdash;" + bleu.title + "</h3>" + "<p>" + bleu.date + "&nbsp;"  + bleu.desc_00 + "</p>" + "<p>" + bleu.desc_01 + "</p>" + "<p>" + bleu.desc_02 + "</p>";

// Advanced Energy Economy

const aee = {co:"Advanced Energy Economy",
             title:"Creative Director",
             date:"(2013-2016)",
             desc:"Defined, built, and maintained the company’s visual identity to ensure brand consistency across channels, mediums, and campaigns. Responsible for conceptualizing and creating assets for print collateral, websites, and email campaigns."};
const aeeAcomplir = ["Managed files and cloud repositories using Dropbox and Github. The use of Trello and Asana project management software and a consolidated file system expedited file updates, led to greater transparency, and more efficient processes.", 
                     "Incorporated Hubspot (CRM) into existing processes and website to maximize talents and time of program leads and developers, allowing program leads to instantly make content updates."];
                        
document.getElementById("AdvancedEnergyEconomy").innerHTML = 
    "<h3>" + aee.co + "&mdash;" + aee.title + "</h3>" + "<p>" + aee.date + "&nbsp;"  + aee.desc + "</p>";

// Gap & Old Navy

const gap = {co:"Gap Inc.",
             title:"Sr. Level Graphic Designer",
             date:"(2013)",
             desc_00:"Collaborated with copywriters, designers, and marketing teams to create and support online and email campaigns.",
             desc_01:"Old Navy is in constant communication with their customers. The marketing and creative teams foster relationships through email and online campaigns. The campaigns are centered around new products, promotions, and sales.",
             desc_02:"Weekly marketing and design meetings allow for open collaboration and exploration. Production artists, designers, copy editors, art directors, and team leads are encouraged to discuss new ideas and fine tune project briefs and update style guides for targeted online email campaigns."};

document.getElementById("GapOldNavy").innerHTML = 
    "<h3>" + gap.co + "&mdash;" + gap.title + "</h3>" + "<p>" + gap.date + "&nbsp;"  + gap.desc_00 + "</p>" + "<p>" + gap.desc_01 + "</p>" + "<p>" + gap.desc_02 + "</p>";

// Dictionary Case Study

const dict = {co:"Dictionary.com",
              title:"Search Results Case Study",
              desc_00:"Dictionary.com is committed to accelerating the discovery and mastery of English in all its forms. As the world's leading digital resource for language success, they were looking for solutions to increase the awareness of their expanding product line and increase earnings without compromising their primary vision.", 
              desc_01:"Focusing on the goal of increasing revenue, advertising and promotion became a more prominent part of the search results. The site was redesigned to give more emphasis to exclusive advertising.",
              desc_02:"The responsive and grid based mock-ups work within the established style and brand guidelines to call out the promotions and ads. Using typographic and visual hierarchy, the search results remain the primary focus."};

document.getElementById("DictionaryCaseStudy").innerHTML = 
    "<h3>" + dict.co + "&mdash;" + dict.title + "</h3>" + "<p>" + dict.desc_00 + "</p>" + "<p>" + dict.desc_01 + "</p>" + "<p>" + dict.desc_02 + "</p>";

// Chronicle Books

const chron = {co: "Chronicle Books",
               title:"Dynamic Digital Production Coordinator",
               date:"(2013-2016)",
               desc:"Collaborated with teams at Sony, HBO, Lucasfilm, Apple, and Amazon to create digital books and applications."};
const chronAcomplir = ["Built relationships with authors, editors, designers, content creators, and outside vendors to set up systems to translate the entire back catalog of physical books and mechanicals to ebooks. Efficiently converted approximately 1000 titles of varied complexity per year.",
                       "Recruited and developed a five-person team of front-end web developers, design-fellows, and interns."];

                            
document.getElementById("ChronicleBooks").innerHTML = 
    "<h3>" + chron.co + "&mdash;" + chron.title + "</h3>" + "<p>" + chron.date + "&nbsp;"  + chron.desc + "</p>";

// TRX & Fitness Anywhere 

const trx = {co:"TRX Training",
             title:"Creative Manager",
             date:"(2007-2010)",
             desc:"Responsible for hiring and managing a six-person video production team and developing best practices for content creation and distribution."};
const trxAcomplir = ["Worked with the CEO and Founder and department heads to oversee the production, filming, and editing of the TRX Force Training Videos. The resulting two-disc DVD set established the standards for production quality for subsequent projects.", 
                     "Created standards to encourage early-stage content creators ownership of their content. By allowing content creators and personal trainers to produce videos and blog posts independently, the internal production team was able to focus on revenue-generating projects.", 
                     "Designed, developed, and presented wireframes, storyboards, user experiences, interactions and prototypes for online communities, landing pages, and large scale campaigns resulting in a consistent look and feel across digital channels."];
                            
document.getElementById("TRXFitnessAnywhere").innerHTML = 
    "<h3>" + trx.co + "&mdash;" + trx.title + "</h3>" + "<p>" + trx.date + "&nbsp;"  + trx.desc + "</p>";

// REO Company

const reo = {co:"REO Company",
             title:"Creative Lead",
             date:"(2002-2005)",
             desc:"Led photographers, printers, and other vendors to design a consistent online and marketing presence."};
                            
document.getElementById("REOCompany").innerHTML = 
    "<h3>" + reo.co + "&mdash;" + reo.title + "</h3>" + "<p>" + reo.date + "&nbsp;"  + reo.desc + "</p>";

// CBS MarketWatch

const mktw = {co:"CBS MarketWatch",
              title:"Graphic Designer",
              date:"(1999–2001)",
              desc:"Worked with the marketing department and outside vendors to create print and online materials. Assisted the newsroom and created graphics for the constantly changing website."};
                            
document.getElementById("CBSMarketWatch").innerHTML = 
    "<h3>" + mktw.co + "&mdash;" + mktw.title + "</h3>" + "<p>" + mktw.date + "&nbsp;"  + mktw.desc + "</p>";