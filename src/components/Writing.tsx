import React, { useEffect, useState, useRef } from 'react';
import { ChevronLeft, ChevronRight } from 'lucide-react';
export function Writing() {
  const scrollContainerRef = useRef<HTMLDivElement>(null);
  const [canScrollLeft, setCanScrollLeft] = useState(false);
  const [canScrollRight, setCanScrollRight] = useState(true);
  const articles = [{
    title: 'When Creative Work Is Product Work',
    category: 'Product Strategy',
    excerpt: 'Exploring the intersection of creative processes and product development methodologies.',
    date: 'June 12, 2023'
  }, {
    title: 'Building Products That Scale With User Needs',
    category: 'Product Development',
    excerpt: 'How to design flexible systems that evolve with your user base and their changing requirements.',
    date: 'April 3, 2023'
  }, {
    title: 'The Future of Media Platforms',
    category: 'Industry Insights',
    excerpt: 'Predictions and analysis of emerging trends in media consumption and creator economies.',
    date: 'February 18, 2023'
  }, {
    title: 'Data-Driven Product Decisions',
    category: 'Product Strategy',
    excerpt: 'How to leverage analytics and user research to make informed product choices.',
    date: 'January 8, 2023'
  }, {
    title: 'The Art of Saying No',
    category: 'Product Management',
    excerpt: 'Why strategic prioritization and focus are essential skills for product managers.',
    date: 'December 15, 2022'
  }, {
    title: 'AI and the Future of Content',
    category: 'Industry Insights',
    excerpt: 'Examining how artificial intelligence is reshaping content creation and distribution.',
    date: 'November 22, 2022'
  }];
  const checkScrollPosition = () => {
    if (scrollContainerRef.current) {
      const {
        scrollLeft,
        scrollWidth,
        clientWidth
      } = scrollContainerRef.current;
      setCanScrollLeft(scrollLeft > 0);
      setCanScrollRight(scrollLeft < scrollWidth - clientWidth - 10);
    }
  };
  useEffect(() => {
    checkScrollPosition();
    const container = scrollContainerRef.current;
    if (container) {
      container.addEventListener('scroll', checkScrollPosition);
      return () => container.removeEventListener('scroll', checkScrollPosition);
    }
  }, []);
  const scroll = (direction: 'left' | 'right') => {
    if (scrollContainerRef.current) {
      const scrollAmount = scrollContainerRef.current.clientWidth * 0.8;
      const newScrollLeft = scrollContainerRef.current.scrollLeft + (direction === 'left' ? -scrollAmount : scrollAmount);
      scrollContainerRef.current.scrollTo({
        left: newScrollLeft,
        behavior: 'smooth'
      });
    }
  };
  return <section id="writing" className="py-20 relative">
      {/* Background shapes */}
      <div className="absolute -z-10 top-40 left-20 w-64 h-64 rounded-full bg-light-beige opacity-50"></div>
      <div className="absolute -z-10 bottom-20 right-40 w-80 h-80 rounded-full bg-light-beige opacity-30"></div>
      <div className="text-center mb-16">
        <h2 className="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-4">
          Writing
        </h2>
        <p className="text-deep-espresso/70 text-lg max-w-2xl mx-auto">
          Thoughts on product, media, AI, and the things I'm curious about.
        </p>
      </div>
      <div className="relative">
        {/* Navigation Arrows */}
        {canScrollLeft && <button onClick={() => scroll('left')} className="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-white border border-olive-grey/20 rounded-full shadow-soft flex items-center justify-center text-deep-espresso hover:bg-soft-terracotta hover:text-white hover:border-soft-terracotta transition-all" aria-label="Scroll left">
            <ChevronLeft size={24} />
          </button>}
        {canScrollRight && <button onClick={() => scroll('right')} className="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-12 h-12 bg-white border border-olive-grey/20 rounded-full shadow-soft flex items-center justify-center text-deep-espresso hover:bg-soft-terracotta hover:text-white hover:border-soft-terracotta transition-all" aria-label="Scroll right">
            <ChevronRight size={24} />
          </button>}
        {/* Scrollable Container */}
        <div ref={scrollContainerRef} className="flex gap-6 overflow-x-auto scrollbar-hide scroll-smooth px-4 md:px-12" style={{
        scrollbarWidth: 'none',
        msOverflowStyle: 'none'
      }}>
          {articles.map((article, index) => <div key={index} className="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[45vw] lg:w-[30vw] bg-white border border-olive-grey/10 rounded-card overflow-hidden shadow-soft p-6">
              <div className="mb-4">
                <span className="inline-block px-4 py-1 bg-soft-terracotta/10 text-soft-terracotta rounded-full text-sm">
                  {article.category}
                </span>
              </div>
              <h3 className="font-outfit text-xl font-bold mb-3">
                {article.title}
              </h3>
              <p className="text-deep-espresso/80 mb-4">{article.excerpt}</p>
              <div className="flex items-center justify-between">
                <span className="text-sm text-olive-grey">{article.date}</span>
                <a href="#" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors text-sm font-medium">
                  Read Article →
                </a>
              </div>
            </div>)}
        </div>
        {/* Scroll Indicator */}
        <div className="flex justify-center mt-8 gap-2">
          {Array.from({
          length: Math.ceil(articles.length / 3)
        }).map((_, index) => <div key={index} className="w-2 h-2 rounded-full bg-olive-grey/30"></div>)}
        </div>
      </div>

      {/* Medium Note */}
      <div className="text-center mt-8">
        <p className="text-deep-espresso/70 text-sm">
          Some essays are also published on{' '}
          <a href="https://medium.com/@annabarto" target="_blank" rel="noopener noreferrer" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">
            Medium
          </a>
          .
        </p>
      </div>
    </section>;
}