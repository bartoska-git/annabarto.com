import React from 'react';
import { Link } from 'react-router-dom';
export function Portfolio() {
  const projects = [{
    title: 'Building 0→1 Products (Moniify)',
    description: 'Built 3 products from zero and led 20+ hybrid team in a next-gen business media startup. Each product addressed a distinct audience and market opportunity.',
    tags: ['Product Strategy', 'Early-Stage'],
    image: "/6631043b-6410-455a-9938-9d6e1eb8ca40.jpg",
    caseStudyLink: '/case-study/moniify'
  }, {
    title: 'Custom Airtable App (Moniify)',
    description: 'Designed a low-code Airtable app that automated 10K+ annual handoffs across 700+ video workflows, connecting internal teams and agencies in real time.',
    tags: ['Workflow Automation', 'Internal Tools'],
    image: "/622ab1d7-e27c-474d-84a6-ea33c89e469d.jpg",
    caseStudyLink: '/case-study/airtable-app'
  }, {
    title: 'AI Dubbing Experiment (Google)',
    description: "Led Google's early AI-dubbing experiment for developer content, testing multilingual synthetic audio using Universal Translator. AI dubbing achieved ~3× higher adoption than subtitles and expanded reach across key markets.",
    tags: ['AI Experimentation', 'Accessibility'],
    image: "/cd39daee-6f59-4f2f-8cf0-57159d8faf59.jpg"
  }, {
    title: 'Developer Audience Insights Study (Google)',
    description: 'Designed and ran a 387-response user study (≈95% confidence for 210k UMV), revealing audience needs that doubled reach and boosted engagement ~20% with zero paid promotion.',
    tags: ['User Research', 'Data-Informed Strategy'],
    image: "/22d28a67-69f2-4a30-b34e-e18acc9a5905.jpg"
  }, {
    title: 'Cross-Platform Delivery & Discoverability (Google)',
    description: "Built the delivery and discovery system for Google's Search Off the Record podcast. Addressed cross-platform UI constraints, distribution latency, and accessibility gaps. Discoverability experiments grew downloads ~400%.",
    tags: ['Platform Constaints', 'Product Discoverability'],
    image: "/99c400fa-3d3f-470e-80b4-f9b521d39a42.jpg"
  }, {
    title: 'Creator Crowdfunding Product Discovery (YouTube)',
    description: 'Led a hypothesis-driven discovery on creator crowdfunding, combining SQL data mining with global market research. Built internal tooling, playbooks, and an external course.',
    tags: ['Creator Monetization', 'Product Discovery'],
    image: "/052b2e21-868c-4771-9b4c-741580b7195e.jpg"
  }];
  return <section id="portfolio" className="py-20">
      <div className="text-center mb-16">
        <h2 className="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-3">
          Product Portfolio
        </h2>
        <p className="text-lg text-deep-espresso/70">
          Selected work in strategy, discovery, experimentation, and 0→1
          building.
        </p>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        {projects.map((project, index) => <div key={index} className="bg-light-beige border border-olive-grey/20 rounded-card overflow-hidden shadow-soft transition-transform hover:translate-y-[-4px]">
            <div className="h-48 overflow-hidden">
              <img src={project.image} alt={project.title} className="w-full h-full object-cover" />
            </div>
            <div className="p-6">
              <h3 className="font-outfit text-xl font-bold mb-3">
                {project.title}
              </h3>
              <div className="flex flex-wrap gap-2 mb-3">
                {project.tags.map((tag, tagIndex) => <span key={tagIndex} className="text-xs px-3 py-1 bg-soft-terracotta/10 text-soft-terracotta rounded-full">
                    {tag}
                  </span>)}
              </div>
              <p className="text-deep-espresso/80 mb-4">
                {project.description}
              </p>
              {project.caseStudyLink ? <Link to={project.caseStudyLink} className="inline-block text-soft-terracotta border-b border-soft-terracotta hover:text-soft-terracotta/80 transition-colors">
                  Read Case Study →
                </Link> : <a href="#" className="inline-block text-soft-terracotta border-b border-soft-terracotta hover:text-soft-terracotta/80 transition-colors">
                  Read Case Study →
                </a>}
            </div>
          </div>)}
      </div>
    </section>;
}