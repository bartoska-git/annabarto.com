<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Anna Barto' : 'Anna Barto | Product Manager & Applied AI Builder'; ?></title>
    <meta name="description" content="<?php echo isset($ogDescription) ? $ogDescription : 'Product Manager & Applied AI Builder. Ex-Google & YouTube. Building RAG systems, LLM pipelines, and AI-assisted products. Case studies from YouTube, Google, and Moniify.'; ?>"><?php // Used by Google search snippets ?>

    <!-- Open Graph / Social Media Meta Tags -->
    <?php
    // Determine the base URL dynamically
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $baseUrl = $protocol . '://' . $_SERVER['HTTP_HOST'];
    ?>
    <meta property="og:title" content="<?php echo isset($ogTitle) ? $ogTitle : (isset($pageTitle) ? $pageTitle . ' | Anna Barto' : 'Anna Barto | Product Manager & Applied AI Builder'); ?>">
    <meta property="og:description" content="<?php echo isset($ogDescription) ? $ogDescription : 'Product Manager & Applied AI Builder. Ex-Google & YouTube. Building RAG systems, LLM pipelines, and AI-assisted products. Case studies from YouTube, Google, and Moniify.'; ?>">
    <meta property="og:image" content="<?php echo isset($ogImage) ? $baseUrl . $ogImage : $baseUrl . '/public/optimized/anna-portrait.jpg'; ?>">
    <meta property="og:url" content="<?php echo $baseUrl . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="<?php echo isset($ogType) ? $ogType : 'website'; ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($ogTitle) ? $ogTitle : (isset($pageTitle) ? $pageTitle . ' | Anna Barto' : 'Anna Barto | Product Manager & Applied AI Builder'); ?>">
    <meta name="twitter:description" content="<?php echo isset($ogDescription) ? $ogDescription : 'Product Manager & Applied AI Builder. Ex-Google & YouTube. Building RAG systems, LLM pipelines, and AI-assisted products. Case studies from YouTube, Google, and Moniify.'; ?>">
    <meta name="twitter:image" content="<?php echo isset($ogImage) ? $baseUrl . $ogImage : $baseUrl . '/public/optimized/anna-portrait.jpg'; ?>">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles.css">

    <!-- PostHog Analytics -->
    <script>
        !function(t,e){var o,n,p,r;e.__SV||(window.posthog && window.posthog.__loaded)||(window.posthog=e,e._i=[],e.init=function(i,s,a){function g(t,e){var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}(p=t.createElement("script")).type="text/javascript",p.crossOrigin="anonymous",p.async=!0,p.src=s.api_host.replace(".i.posthog.com","-assets.i.posthog.com")+"/static/array.js",(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r);var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],u.toString=function(t){var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e},u.people.toString=function(){return u.toString(1)+".people (stub)"},o="init ts ns yi rs os Qr es capture Hi calculateEventProperties hs register register_once register_for_session unregister unregister_for_session fs getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSurveysLoaded onSessionId getSurveys getActiveMatchingSurveys renderSurvey displaySurvey cancelPendingSurvey canRenderSurvey canRenderSurveyAsync identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException startExceptionAutocapture stopExceptionAutocapture loadToolbar get_property getSessionProperty vs us createPersonProfile cs Yr ps opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing get_explicit_consent_status is_capturing clear_opt_in_out_capturing ls debug O ds getPageViewId captureTraceFeedback captureTraceMetric Vr".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])},e.__SV=1)}(document,window.posthog||[]);
        posthog.init('phc_OMIEu0IegMfMP5ggINrT5B2qEbQrDM0CT6VDu6MO0R', {
            api_host: 'https://eu.i.posthog.com',
            person_profiles: 'identified_only'
        })

        // Allow opt-out via URL parameter: ?posthog_opt_out=true
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('posthog_opt_out') === 'true') {
            posthog.opt_out_capturing();
            console.log('PostHog tracking disabled');
        } else if (urlParams.get('posthog_opt_in') === 'true') {
            posthog.opt_in_capturing();
            console.log('PostHog tracking enabled');
        }
    </script>
</head>
<body>
