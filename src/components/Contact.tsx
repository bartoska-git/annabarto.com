import React from 'react';
import { Linkedin } from 'lucide-react';
export function Contact() {
  return <section id="contact" className="py-20 bg-light-beige">
      <div className="max-w-3xl mx-auto text-center">
        <h2 className="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-6">
          Let's work together.
        </h2>
        <p className="text-deep-espresso/80 mb-10 max-w-2xl mx-auto">
          If you're hiring for a product role or need help with strategy or
          execution on a project, I'm happy to explore whether we're a good fit.
        </p>
        <div className="flex flex-wrap justify-center gap-4">
          <a href="mailto:barto.annie@gmail.com" className="px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium">
            Get in Touch
          </a>
          <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" className="px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
            <Linkedin size={16} />
            LinkedIn
          </a>
        </div>
      </div>
    </section>;
}