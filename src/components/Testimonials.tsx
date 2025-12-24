import React from 'react';
export function Testimonials() {
  const testimonials = [{
    quote: "Anna is the ultimate professional and lifts every team she's in! We had a brilliant run launching Moniify at breakneck speeds.",
    author: 'Mohamad Zaoud',
    title: 'Co-Founder & Director at Benchmark Capital (former CPO at Moniify)'
  }, {
    quote: 'Anna is thoughtful, thorough, and an exceptional manager. She spots opportunities quickly and builds the strongest possible outcome. I still model my management style after hers.',
    author: 'Becca Loman',
    title: 'Product Graphics Producer, Apple (former Google Developer Media Lab)'
  }, {
    quote: 'Anna combines analytical rigor with rare self-direction. She taught herself SQL to fill a critical data gap and delivered insights that shaped our strategy. She excels at turning ambiguity into clarity.',
    author: 'Andre Nogueira',
    title: 'Head of Affiliate Operations, TikTok (former YouTube)'
  }];
  return <section id="testimonials" className="py-20">
      <div className="text-center mb-16">
        <h2 className="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-4">
          Testimonials
        </h2>
        <p className="text-deep-espresso/70 text-lg max-w-2xl mx-auto">
          Feedback from my former colleagues, managers, and team members I led.
        </p>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
        {testimonials.map((testimonial, index) => <div key={index} className="bg-light-beige rounded-card p-6 shadow-soft">
            <div className="mb-4 text-soft-terracotta">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" className="opacity-30">
                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
              </svg>
            </div>
            <blockquote className="font-outfit text-lg italic mb-6 text-deep-espresso/90">
              "{testimonial.quote}"
            </blockquote>
            <div>
              <p className="font-medium text-deep-espresso">
                {testimonial.author}
              </p>
              <p className="text-olive-grey text-sm">{testimonial.title}</p>
            </div>
          </div>)}
      </div>
    </section>;
}