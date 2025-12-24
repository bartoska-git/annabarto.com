import React from 'react';
export function LogoStrip() {
  const logos = [{
    name: 'Google',
    url: 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png',
    height: 'h-8 md:h-10'
  }, {
    name: 'YouTube',
    url: 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/2560px-Logo_of_YouTube_%282015-2017%29.svg.png',
    height: 'h-8 md:h-10'
  }, {
    name: 'Moniify',
    url: "/MONIIFY_Logo-2.png",
    height: 'h-6 md:h-7'
  }, {
    name: 'HGS Consultants',
    url: "/unnamed.png",
    height: 'h-10 md:h-12'
  }, {
    name: 'Transform Lab',
    url: "/unnamed_%281%29.png",
    height: 'h-8 md:h-10'
  }];
  return <section className="py-16 border-t border-olive-grey/10">
      <div className="text-center mb-10">
        <p className="text-olive-grey/70 uppercase tracking-wider text-sm font-medium">
          Worked with
        </p>
      </div>
      <div className="flex flex-wrap justify-center gap-8 md:gap-16">
        {logos.map((logo, index) => <div key={index} className={`${logo.height} flex items-center`}>
            <img src={logo.url} alt={logo.name} className="h-full object-contain opacity-50 grayscale" />
          </div>)}
      </div>
    </section>;
}