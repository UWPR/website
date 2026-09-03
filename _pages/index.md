---
title: "University of Washington Proteomics Resource"
permalink: /
layout: splash

page_css: 
 - /assets/style/uwpr.css

header:
 overlay_color: "#000"
 overlay_filter: "0.75"
 overlay_image: /assets/images/source4.jpg
excerpt: "The University of Washington’s Proteomics Resource (UWPR) is a proteomics facility whose mission is to advance proteomic technologies and apply these technologies to significant biological problems."

home_cards:
  - image_path: /assets/images/collaborate.jpg
    alt: "collaborate"
    title: "Collaborate"
    excerpt: "UWPR provides UW researchers with analytical and instructional expertise in proteomics techniques and data analysis."
    url: /collab/
  - image_path: /assets/images/facility1.jpeg
    alt: "facility"
    title: "Facility"
    excerpt: "Learn more about UWPR's state of the art LC-MS instrumentation and computational resources."
    url: /facility/
  - image_path: /assets/images/methods.jpg
    alt: "resources"
    title: "Resources"
    excerpt: "A broad reference for shotgun proteomics: knowledgebase, sample preparation, protocols, data analysis, consumables, and safety."
    url: /resources/
  - image_path: /assets/images/NUCKS.jpeg
    alt: "tools"
    title: "Tools"
    excerpt: "Online calculators, spectrum viewers, and downloadable utilities developed or hosted by the UWPR for analyzing mass spectrometry data."
    url: /tools/
  - image_path: /assets/images/publications.jpg
    alt: "publications"
    title: "Publications"
    excerpt: "The UWPR supports a wide range of proteomics research. A collection of the publications is available here."
    url: /publications/
  - image_path: /assets/images/aboutus3.jpg
    alt: "contact"
    title: "Contact"
    excerpt: "Contact or visit the UWPR. Address, shuttle, and contact information found here."
    url: /contact/

---

<div class="home-cards">
  {%- for card in page.home_cards %}
  <div class="home-card">
    <a class="home-card__media" href="{{ card.url | relative_url }}">
      <img src="{{ card.image_path | relative_url }}" alt="{{ card.alt }}">
      <span class="home-card__banner">{{ card.title }}</span>
    </a>
    <div class="home-card__body">{{ card.excerpt }}</div>
    <div class="home-card__action">
      <a href="{{ card.url | relative_url }}" class="btn btn--primary">Learn More</a>
    </div>
  </div>
  {%- endfor %}
</div>

<div class="uwpr-grid">
 <div class="uwpr-grid-item">
  <div class="uwpr-grid2">
   <div>
	<i class="fa fa-cogs" style="font-size:48px"></i>
   </div>
   <div>
    <h3>Our Mission</h3>
    <span>Proteomics is one of many complementary tools we apply to broaden our knowledge of biological systems. At UWPR we enable researchers to exploit powerful proteomic technologies to explore living systems and answer important biological questions.</span>
   </div>
  </div>
 </div>
 <div class="uwpr-grid-item">
  <div class="uwpr-grid2">
   <div>
	<i class="fa fa-road" style="font-size:48px"></i>
   </div>
   <div>
    <h3>University of Washington</h3>
    <span>UWPR is located at the University of Washington School of Medicine, South Lake Union (SLU) campus.</span>
   </div>
  </div>
 </div>
</div>
