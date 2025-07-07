document.addEventListener('DOMContentLoaded', () => {
  const categories = document.querySelectorAll('.tech-category');
  const techGrid = document.querySelector('.tech-grid');

  const techData = {

      frontend: [
          { name: 'React', logo: '/static/images/about-img/react-js-logo.svg' },
          { name: 'Vue.js', logo: '/static/images/about-img/vuejs-logo.svg' },
          { name: 'Angular', logo: '/static/images/about-img/angular-logo.svg' }
      ],
      backend: [
          { name: 'Php', logo: '/static/images/about-img/php-logo.svg' },
          { name: 'Phython', logo: '/static/images/about-img/python-logo.svg' },
          { name: 'Node Js', logo: '/static/images/about-img/node-js-logo.svg' }

      ],
      databases: [
          { name: 'MySQL', logo: '/static/images/about-img/mysql.png' },
          { name: 'MongoDB', logo: '/static/images/about-img/mongodb.png' },
          { name: 'PostgreSQL', logo: '/static/images/about-img/postgre-sql.png' }
      ],
      cloud: [
          { name: 'AWS', logo: '/static/images/about-img/aws-elasticache.svg' },
          { name: 'Azure', logo: '/static/images/about-img/azure-logo.svg' },
          { name: 'Google Cloud', logo: '/static/images/about-img/google-cloud.svg' }
      ],

    WebServices: [
      { name: 'Web APIs', logo: '/static/images/about-img/web-api.png' },
      { name: 'SOP Services', logo: '/static/images/about-img/soap.png' },
      { name: 'RESTful Services', logo: '/static/images/about-img/restful.png' },
      { name: 'WCF Services.Net', logo: '/static/images/about-img/wcf.png' }
    ],
    WebApplications: [
      { name: 'Asp.Net', logo: '/static/images/about-img/asp.png' },
      { name: 'Angular', logo: '/static/images/about-img/angular-logo.svg' },
      { name: 'Asp.Net Webapp', logo: '/static/images/about-img/asp.png' }
    ],
    UserInterfaces: [
      { name: 'Telerik', logo: '/static/images/about-img/telerik.png' },
      { name: 'Material Design', logo: '/static/images/about-img/material.png' },
      { name: 'Bootstrap', logo: '/static/images/about-img/bootstrap.png' }
    ]
  };

  categories.forEach(category => {
    category.addEventListener('click', () => {
      categories.forEach(c => c.classList.remove('active'));
      category.classList.add('active');

      const categoryType = category.dataset.type;
      techGrid.innerHTML = '';

      techData[categoryType]?.forEach(tech => {
        const techItem = document.createElement('div');
        techItem.className = 'tech-item';
        techItem.innerHTML = `
          <img src="${tech.logo}" alt="${tech.name} Logo" class="tech-logo" />
          <span>${tech.name}</span>
        `;
        techGrid.appendChild(techItem);
      });
    });
  });

  // Initialize with the first category
  categories[0]?.click();
});
