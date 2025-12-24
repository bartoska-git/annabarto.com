import React from 'react';
import { ArrowRight, Download, Linkedin } from 'lucide-react';
export function Hero() {
  return <section className="relative h-screen min-h-[600px] -mx-4 sm:-mx-6 lg:-mx-8">
      <div className="h-full flex flex-col md:flex-row">
        {/* Left side - Image with diagonal clip */}
        <div className="relative w-full md:w-[40%] h-[40vh] md:h-full bg-soft-terracotta/20 flex items-center justify-center md:clip-diagonal">
          <div className="relative z-10 w-64 h-64 md:w-80 md:h-80">
            <img src="/barto-1.png" alt="Anna Barto" className="w-full h-full object-cover rounded-full shadow-lg" />
          </div>
          {/* Diagonal divider line - hidden on mobile */}
          <div className="hidden md:block absolute right-0 top-0 bottom-0 w-[1px] bg-olive-grey/30 transform translate-x-1/2 rotate-[-8deg] origin-center"></div>
        </div>
        {/* Right side - Content */}
        <div className="w-full md:w-[60%] flex items-center px-6 sm:px-8 lg:px-16 py-12 md:py-0 bg-warm-beige">
          <div className="max-w-2xl space-y-6">
            <h1 className="font-outfit text-4xl md:text-5xl lg:text-6xl font-bold text-deep-espresso leading-tight">
              Anna Barto
            </h1>
            <h2 className="text-xl md:text-2xl font-medium text-deep-espresso">
              Product Strategy & Media Innovation
            </h2>
            <p className="text-base md:text-lg text-deep-espresso/90 leading-relaxed">
              I'm a product manager shaped by a nonlinear path across strategy
              and partnerships at Google & YouTube, creative production and
              content R&D at a media lab, and 0→1 product work in early-stage
              startups and consulting.
            </p>
            <div className="flex flex-wrap gap-3 pt-4">
              <a href="#portfolio" className="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                <ArrowRight size={16} />
                View Portfolio
              </a>
              <a href="#" className="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                <Download size={16} />
                Download CV
              </a>
              <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" className="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                <Linkedin size={16} />
                LinkedIn
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>;
}