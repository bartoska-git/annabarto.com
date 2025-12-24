import React, { useEffect, useState } from 'react';
import { ArrowLeft, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';
export function MoniifyCaseStudy() {
  const [activeSection, setActiveSection] = useState('');
  const sections = [{
    id: 'overview',
    label: 'Overview'
  }, {
    id: 'portfolio',
    label: 'Product Portfolio'
  }, {
    id: 'philosophy',
    label: 'Product Philosophy'
  }, {
    id: 'building',
    label: 'Building 0→1'
  }, {
    id: 'constraints',
    label: 'Constraints'
  }, {
    id: 'outcome',
    label: 'Outcome'
  }, {
    id: 'related',
    label: 'Related Case Studies'
  }];
  useEffect(() => {
    const handleScroll = () => {
      const scrollPosition = window.scrollY + 120;
      for (let i = sections.length - 1; i >= 0; i--) {
        const section = document.getElementById(sections[i].id);
        if (section && section.offsetTop <= scrollPosition) {
          setActiveSection(sections[i].id);
          break;
        }
      }
    };
    handleScroll();
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);
  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      const offset = 80;
      const elementPosition = element.offsetTop - offset;
      window.scrollTo({
        top: elementPosition,
        behavior: 'smooth'
      });
    }
  };
  const stats = [{
    label: 'Products Built',
    value: '3'
  }, {
    label: 'Products Launched',
    value: '2'
  }, {
    label: 'Team Members Hired',
    value: '20+'
  }, {
    label: 'Build Timeline',
    value: '6 months'
  }];
  const relatedCaseStudies = [{
    title: 'Custom Airtable App (Moniify)',
    description: 'Workflow automation for 10K+ handoffs',
    slug: 'airtable-app'
  }, {
    title: 'Moniify Creators',
    description: 'Integrating credible creators into editorial output',
    slug: 'moniify-creators'
  }, {
    title: 'Moniify Daily',
    description: 'Daily video product covering the new economy',
    slug: 'moniify-daily'
  }, {
    title: 'RicHer',
    description: 'Female-led finance and investing format',
    slug: 'richer'
  }];
  return <div className="min-h-screen bg-warm-beige">
      {/* Navigation */}
      <nav className="fixed top-0 left-0 right-0 z-50 bg-warm-beige border-b border-olive-grey/10 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <Link to="/" className="font-outfit text-xl font-bold text-deep-espresso hover:text-soft-terracotta transition-colors">
              Anna Barto
            </Link>
            <Link to="/#portfolio" className="flex items-center gap-2 text-deep-espresso hover:text-soft-terracotta transition-colors font-medium">
              <ArrowLeft size={16} />
              Back to Portfolio
            </Link>
          </div>
        </div>
      </nav>

      {/* Spacer */}
      <div className="h-16"></div>

      {/* Sticky Sidebar TOC - Desktop Only */}
      <aside className="hidden xl:block fixed left-8 top-32 w-56 z-40">
        <div className="bg-light-beige rounded-lg border border-olive-grey/10 p-4 shadow-soft">
          <h3 className="font-outfit text-sm font-semibold text-deep-espresso mb-4 uppercase tracking-wide">
            Contents
          </h3>
          <nav className="relative">
            {/* Progress indicator line */}
            <div className="absolute left-0 top-0 bottom-0 w-0.5 bg-olive-grey/20"></div>
            <div className="absolute left-0 top-0 w-0.5 bg-soft-terracotta transition-all duration-300 ease-out" style={{
            height: `${(sections.findIndex(s => s.id === activeSection) + 1) / sections.length * 100}%`
          }}></div>

            <ul className="space-y-1 relative">
              {sections.map(section => <li key={section.id}>
                  <button onClick={() => scrollToSection(section.id)} className={`w-full text-left pl-4 pr-2 py-2 text-sm transition-all duration-200 rounded ${activeSection === section.id ? 'text-soft-terracotta font-medium' : 'text-deep-espresso/70 hover:text-deep-espresso'}`}>
                    {section.label}
                  </button>
                </li>)}
            </ul>
          </nav>
        </div>
      </aside>

      {/* Content */}
      <main className="max-w-[1040px] mx-auto px-4 sm:px-6 lg:px-8 xl:pl-72 py-12 md:py-16">
        {/* Hero Section */}
        <div id="overview" className="bg-light-beige rounded-card shadow-soft p-8 md:p-12 mb-20 border border-olive-grey/10">
          <h1 className="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">
            Building 0→1 Products at Moniify
          </h1>

          {/* Role & Focus - Visually Distinct */}
          <div className="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
            <div className="mb-2">
              <span className="font-semibold text-deep-espresso">Role:</span>{' '}
              <span className="text-deep-espresso/90">Product Lead</span>
            </div>
            <div>
              <span className="font-semibold text-deep-espresso">Focus:</span>{' '}
              <span className="text-deep-espresso/90">
                Product Strategy · Media Innovation · 0→1 Product Building
              </span>
            </div>
          </div>

          {/* Condensed Overview */}
          <p className="text-deep-espresso/90 leading-relaxed text-lg">
            As one of four Product Leads at Moniify, a stealth-stage business
            media startup building "Bloomberg for the next generation", I
            developed three video-first products from zero, launched two, and
            built a 20+ hybrid product–editorial team.
          </p>
        </div>
        {/* Quick Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-24">
          {stats.map((stat, index) => <div key={index} className="bg-soft-terracotta/5 border border-soft-terracotta/20 rounded-lg p-6 text-center">
              <div className="text-3xl font-bold text-soft-terracotta mb-2">
                {stat.value}
              </div>
              <div className="text-sm text-deep-espresso/70">{stat.label}</div>
            </div>)}
        </div>

        {/* My Product Portfolio */}
        <section id="portfolio" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              My Product Portfolio
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-8">
            Each of the three products I led at Moniify addressed a distinct
            problem or opportunity for our target audience: English-speaking
            Zillennial professionals, investors, and entrepreneurs, particularly
            in Asia's fast-growing markets.
          </p>

          <div className="space-y-8">
            <div className="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
              <div className="flex items-start justify-between mb-3">
                <h3 className="font-outfit text-xl font-semibold text-deep-espresso">
                  Moniify Creators
                </h3>
                <span className="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-medium">
                  Launched
                </span>
              </div>
              <p className="text-deep-espresso/90 leading-relaxed mb-4">
                A creator-led product built around the insight that, while
                creators had become a leading voice for Zillennials, finance
                media had failed to integrate them into their editorial output.
              </p>
              <Link to="/case-study/moniify-creators" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">
                Learn more about this product
              </Link>
            </div>

            <div className="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
              <div className="flex items-start justify-between mb-3">
                <h3 className="font-outfit text-xl font-semibold text-deep-espresso">
                  Moniify Daily
                </h3>
                <span className="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-medium">
                  Launched
                </span>
              </div>
              <p className="text-deep-espresso/90 leading-relaxed mb-4">
                A daily video product based on the insight that "new money"
                topics such as AI, crypto, and emerging markets were
                under-served by traditional coverage.
              </p>
              <Link to="/case-study/moniify-daily" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">
                Learn more about this product
              </Link>
            </div>

            <div className="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
              <div className="flex items-start justify-between mb-3">
                <h3 className="font-outfit text-xl font-semibold text-deep-espresso">
                  RicHer
                </h3>
                <span className="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">
                  Piloted
                </span>
              </div>
              <p className="text-deep-espresso/90 leading-relaxed mb-4">
                A female-led finance and investing format driven by the insight
                that, despite women representing a rapidly growing investor
                segment, financial media still lacked female perspectives on
                practical finance and investing.
              </p>
              <Link to="/case-study/richer" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">
                Learn more about this product
              </Link>
            </div>
          </div>
        </section>

        {/* The Product Philosophy */}
        <section id="philosophy" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              The Product Philosophy
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Unlike traditional media organizations, Moniify adopted a
            product-first model replacing siloed editorial desks with
            cross-functional teams that lived by the following principles:
          </p>
          <ul className="space-y-3 mb-6">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Build user-centric products our audience loves
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                A product with no brand will fail
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Use insights and data to guide evey decision
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Create a passionate community that champions our brand
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Stay agile, adapt quickly, and experiment continuously
              </span>
            </li>
          </ul>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Each initiative functioned as its own product with a distinct
            audience strategy, brand identity, and growth metrics. Product Leads
            acted as "Collaborators in Chief", balancing editorial ambition,
            business priorities, and technical constraints.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            In practice, this philosophy came to life through early-stage
            product strategy formulation grounded in market, competitive, and
            user research, followed by format prototyping and initial
            post-launch testing and iteration.
          </p>
        </section>

        {/* Building 0→1 */}
        <section id="building" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Building 0→1
            </h2>
          </div>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Company Vision
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            Moniify's founding belief was:
          </p>
          <p className="text-lg font-medium text-deep-espresso italic mb-6 pl-6 border-l-4 border-soft-terracotta">
            Helping young people build personal wealth is a way of helping them
            achieve personal freedom.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            Topically, we focused on markets & macro, tech & AI, crypto & DeFi,
            and private equity. Our main target audience were English-speaking
            Zillennials in the following high-growth markets:
          </p>
          <ul className="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6">
            {['UAE', 'KSA', 'Indonesia', 'India', 'Singapore'].map((region, index) => <li key={index} className="flex items-center text-deep-espresso/90">
                  <span className="text-soft-terracotta mr-2">•</span>
                  {region}
                </li>)}
          </ul>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            These young professionals were underrepresented but fast-growing
            demographic eager for credible, digital-first coverage of the
            industries shaping their financial futures. Additionally, we
            developed specific audience personas in collaboration with Fluency,
            an external research agency.
          </p>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Translating the Company Vision into Products
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Reporting to the CPO, I translated the company vision into three
            tangible 0→1 products, delivering strategy, execution, and
            cross-functional alignment:
          </p>
          <ul className="space-y-3 mb-6">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Developed product strategies grounded in user, market, and
                competitive research
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Built and led three hybrid product–editorial teams (20+ team
                members)
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Coordinated with finance and legal on budgets, contracts, and
                compliance
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Created{' '}
                <Link to="/case-study/airtable-app" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">
                  Airtable-based workflow systems
                </Link>{' '}
                for cross-team and external collaboration
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Worked on brand systems with design
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Partnered with engineering, design, and analytics on user
                journeys, data layers, and website discovery optimization and
                feature prioritization
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Drove format prototyping pre-launch and A/B testing post launch
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Designed launch frameworks together with marketing and PR
              </span>
            </li>
          </ul>
        </section>

        {/* Constraints */}
        <section id="constraints" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Constraints
            </h2>
          </div>

          <div className="space-y-6">
            <div>
              <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-3">
                Early-Stage Build
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                As a newly formed startup, Moniify operated without established
                systems or processes. I was building foundational infrastructure
                and hiring team members in parallel with product development. As
                a result, timelines were compressed and operational complexity
                was high.
              </p>
            </div>

            <div>
              <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-3">
                Engineering Capacity
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                The engineering team was understaffed, with vendor turnover
                delaying key website features including search, shareability,
                chapters, and listen-to-video. A mobile app was postponed to a
                later phase.
              </p>
            </div>

            <div>
              <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-3">
                Marketing & Distribution Freeze
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                Paid media and advertising were frozen days after the company's
                public launch, severely limiting discoverability and audience
                growth for a completely new brand and newly released products.
              </p>
            </div>

            <div>
              <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-3">
                Strategic Pivot
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed mb-4">
                Within weeks of launch, Moniify underwent a leadership
                transition, a shift in strategy and scale, and multiple rounds
                of layoffs that reduced the workforce by roughly 75%. Most
                product initiatives, including all of my products, were
                suspended during this pivot.
              </p>
              <p className="text-deep-espresso/90 leading-relaxed">
                Because the suspension occurred so early in the product cycle,
                testing and optimization remained in early stages, and limited
                data was collected to inform iteration.
              </p>
            </div>
          </div>
        </section>

        {/* Outcome */}
        <section id="outcome" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Outcome
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            In six months, I:
          </p>
          <ul className="space-y-3 mb-8">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Built three insight-led media products and launched two of them
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Hired and led a 20+ person cross-functional product–editorial
                team
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Created workflow systems that became the operational backbone
                for multiple products
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Generated early evidence supporting creator-led, regionally
                relevant, and women-led finance media products
              </span>
            </li>
          </ul>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            None of the products had the chance to fully mature: all were
            discontinued within weeks of Moniify's public launch amid a
            company-wide pivot, leadership change, and layoffs.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            Even so, the 0→1 phase signaled what a next-generation business
            media company could achieve by uniting product thinking with
            editorial rigor.
          </p>
        </section>

        {/* Related Case Studies */}
        <section id="related">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-8">
            <h2 className="font-outfit text-2xl font-bold text-deep-espresso">
              Related Case Studies
            </h2>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            {relatedCaseStudies.map((study, index) => <Link key={index} to={`/case-study/${study.slug}`} className="group bg-light-beige rounded-lg p-6 border border-olive-grey/10 hover:border-soft-terracotta/30 transition-all">
                <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-2 group-hover:text-soft-terracotta transition-colors">
                  {study.title}
                </h3>
                <p className="text-deep-espresso/70 text-sm">
                  {study.description}
                </p>
              </Link>)}
          </div>
        </section>
      </main>

      {/* Footer */}
      <footer className="py-8 border-t border-olive-grey/10 mt-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <p className="text-olive-grey text-sm">
              © {new Date().getFullYear()} Anna Barto. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </div>;
}