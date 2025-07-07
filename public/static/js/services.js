
document.addEventListener('DOMContentLoaded', () => {
  const categories = document.querySelectorAll('.tech-category');
  const servicesGrid = document.querySelector('.services-grid');

  const techData = {
    frontend: [
      { name: 'React', logo: '/static/images/services/react-js-logo.svg' },
      { name: 'Vue.js', logo: '/static/images/services/vuejs-logo.svg' },
      { name: 'Angular', logo: '/static/images/services/angular-logo.svg' }
    ],
    backend: [
      { name: 'Php', logo: '/static/images/services/php-logo.svg' },
      { name: 'Phython', logo: '/static/images/services/python-logo.svg' },
      { name: 'Node Js', logo: '/static/images/services/node-js-logo.svg' }

    ],
    databases: [
      { name: 'MySQL', logo: '/static/images/services/mysql.png' },
      { name: 'MongoDB', logo: '/static/images/services/mongodb.png' },
      { name: 'PostgreSQL', logo: '/static/images/services/postgre-sql.png' }
    ],
    cloud: [
      { name: 'AWS', logo: '/static/images/services/aws-elasticache.svg' },
      { name: 'Azure', logo: '/static/images/services/azure-logo.svg' },
      { name: 'Google Cloud', logo: '/static/images/services/google-cloud.svg' }
    ],
      ios: [
          { name: 'Swift', logo: '/static/images/services/swift-logo.svg' },
          { name: 'Objective-C', logo: '/static/images/services/objective-c-logo.svg' },
          { name: 'Xcode', logo: '/static/images/services/xcode-logo.svg' }
      ],
      android: [
          { name: 'Kotlin', logo: '/static/images/services/kotlin-logo.svg' },
          { name: 'Java', logo: '/static/images/services/java-logo.svg' },
          { name: 'Android Studio', logo: '/static/images/services/android-studio-logo.png' }
      ],
      crossPlatform: [
          { name: 'Flutter', logo: '/static/images/services/flutter-logo.svg' },
          { name: 'React Native', logo: '/static/images/services/react-native-logo.svg' },
          { name: 'Ionic', logo: '/static/images/services/ionic-logo.svg' }
      ],
      platforms: [
          { name: 'Ethereum', logo: '/static/images/services/ethereum.svg' },
          { name: 'Binance Smart Chain', logo: '/static/images/services/binance.svg' },
          { name: 'Polygon', logo: '/static/images/services/polygon.svg' }
      ],
      languages: [
          { name: 'Solidity', logo: '/static/images/services/solidity.svg' },
          { name: 'Rust', logo: '/static/images/services/rust.svg' },
          { name: 'Go', logo: '/static/images/services/go.svg' }
      ],
      tools: [
          { name: 'Truffle', logo: '/static/images/services/truffle.png' },
          { name: 'Hardhat', logo: '/static/images/services/hardhat.svg' },
          { name: 'Ganache', logo: '/static/images/services/ganache.png' }
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
      ],
      designTools: [
          {name: 'Figma', logo: '/static/images/services/figma.svg'},
          {name: 'Adobe XD', logo: '/static/images/services/adobe-xd.svg'},
          {name: 'Sketch', logo: '/static/images/services/sketch.svg'},
          {name: 'After Effects', logo: '/static/images/services/after-effect.svg'},

      ],

      ecommerceStack: [
          {name: 'Shopify', logo: '/static/images/services/shopify.svg'},
          {name: 'WooCommerce', logo: '/static/images/services/woo-commerce.svg'},
          {name: 'Laravel', logo: '/static/images/services/laravel.svg'},
          {name: 'React.js', logo: '/static/images/services/react.svg'},
          {name: 'Stripe-Paypal', logo: '/static/images/services/stripe.svg'},

      ],

      wordpressStack: [
          {name: 'Wordpress', logo: '/static/images/services/wordpress.svg'},
          {name: 'Elementor', logo: '/static/images/services/elementor.svg'},
          {name: 'Yoast SEO', logo: '/static/images/services/yoast-seo.svg'},
          {name: 'WooCommerce', logo: '/static/images/services/woo-commerce.svg'},

      ],

      marketingStack: [
          {name: 'Google Analytics', logo: '/static/images/services/google-analytics.svg'},
          {name: 'Google Ads', logo: '/static/images/services/google-add.svg'},
          {name: 'Meta ads manager', logo: '/static/images/services/yoast-seo.svg'},

      ],

      qaTestingStack: [
          {name: 'Selenium', logo: '/static/images/services/selenium.svg'},
          {name: 'TestRail', logo: '/static/images/services/testrail.svg'},
          {name: 'Postman', logo: '/static/images/services/postman.svg'},
          {name: 'Jmeter', logo: '/static/images/services/jmeter.svg'},
          {name: 'JIRA', logo: '/static/images/services/jira.svg'},
      ],

      aiStack: [
          {name: 'TensorFlow', logo: '/static/images/services/tensor-flow.svg'},
          {name: 'PyTorch', logo: '/static/images/services/pytorch.svg'},
          {name: 'OpenAI', logo: '/static/images/services/openai.svg'},
          {name: 'spaCy', logo: '/static/images/services/spacy.svg'},
          {name: 'AWS SageMaker', logo: '/static/images/services/awsSagemaker.png'},
      ],

      gameDevStack: [
          {name: 'Unity', logo: '/static/images/services/unity.svg'},
          {name: 'Unreal Engine', logo: '/static/images/services/unreal.svg'},
          {name: 'C', logo: '/static/images/services/cLanguage.svg'},
          {name: 'C++', logo: '/static/images/services/cPlusLanguage.svg'},
          {name: 'Blender', logo: '/static/images/services/blender.svg'},
      ],
      appDevStack: [
          {name: 'Flutter', logo: '/static/images/services/flutter-logo.svg'},
          {name: 'React Native', logo: '/static/images/services/react-native-logo.svg'},
          {name: 'Swift', logo: '/static/images/services/swift-logo.svg'},
          {name: 'Kotlin', logo: '/static/images/services/kotlin-logo.svg'},
          {name: 'Firebase', logo: '/static/images/services/firebase.svg'},
      ],
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
