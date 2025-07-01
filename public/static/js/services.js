
document.addEventListener('DOMContentLoaded', () => {
  const categories = document.querySelectorAll('.tech-category');
  const servicesGrid = document.querySelector('.services-grid');

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
      ios: [
          { name: 'Swift', logo: '/static/images/about-img/swift-logo.svg' },
          { name: 'Objective-C', logo: '/static/images/about-img/objective-c-logo.svg' },
          { name: 'Xcode', logo: '/static/images/about-img/xcode-logo.svg' }
      ],
      android: [
          { name: 'Kotlin', logo: '/static/images/about-img/kotlin-logo.svg' },
          { name: 'Java', logo: '/static/images/about-img/java-logo.svg' },
          { name: 'Android Studio', logo: '/static/images/about-img/android-studio-logo.svg' }
      ],
      crossPlatform: [
          { name: 'Flutter', logo: '/static/images/about-img/flutter-logo.svg' },
          { name: 'React Native', logo: '/static/images/about-img/react-native-logo.svg' },
          { name: 'Ionic', logo: '/static/images/about-img/ionic-logo.svg' }
      ],
      platforms: [
          { name: 'Ethereum', logo: '/static/images/blockchain/ethereum.svg' },
          { name: 'Binance Smart Chain', logo: '/static/images/blockchain/bsc.svg' },
          { name: 'Polygon', logo: '/static/images/blockchain/polygon.svg' }
      ],
      languages: [
          { name: 'Solidity', logo: '/static/images/blockchain/solidity.svg' },
          { name: 'Rust', logo: '/static/images/blockchain/rust.svg' },
          { name: 'Go', logo: '/static/images/blockchain/go.svg' }
      ],
      tools: [
          { name: 'Truffle', logo: '/static/images/blockchain/truffle.svg' },
          { name: 'Hardhat', logo: '/static/images/blockchain/hardhat.svg' },
          { name: 'Ganache', logo: '/static/images/blockchain/ganache.svg' }
      ],
      design: [
          { name: 'Figma', logo: '/static/images/uiux/figma.svg' }
      ],
      prototyping: [
          { name: 'Adobe XD', logo: '/static/images/uiux/adobe-xd.svg' }
      ],
      collaboration: [
          { name: 'Sketch', logo: '/static/images/uiux/sketch.svg' }
      ],
      dev: [
          { name: 'Zeplin', logo: '/static/images/uiux/zeplin.svg' }
      ],
      motion: [
          { name: 'After Effects', logo: '/static/images/uiux/after-effects.svg' }
      ]
  };

  categories.forEach(category => {
    category.addEventListener('click', () => {
      categories.forEach(c => c.classList.remove('active'));
      category.classList.add('active');

        const categoryType = category.dataset.category;
      servicesGrid.innerHTML = '';
      techData[categoryType].forEach(tech => {
        const serviceItem = document.createElement('div');
        serviceItem.className = 'service-item';
        serviceItem.innerHTML = `
          <img src="${tech.logo}" alt="${tech.name} Logo" class="technology-logo">

        `;
        servicesGrid.appendChild(serviceItem);
      });
    });
  });

  // Initialize with frontend
  categories[0].click();
});
