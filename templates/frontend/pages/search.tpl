
	<div class="title">
		<label class="label" for="title">
			{translate key="search.title"}
		</label>
		{block name=searchTitle}
			<input type="text" for="title" name="title" value="{$title|escape}">
		{/block}
	</div>
	<div class="abstract">
		<label class="label" for="abstract">
			{translate key="search.abstract"}
		</label>
		{block name=searchAbstract}
			<input type="text" for="abstract" name="abstract" value="{$abstract|escape}">
		{/block}
	</div>
	<div class="fullText">
		<label class="label" for="fullText">
			{translate key="search.fullText"}
		</label>
		{block name=searchFullText}
			<input type="text" for="galleyFullText" name="galleyFullText" value="{$galleyFullText|escape}">
		{/block}
	</div>
</fieldset>
<fieldset class="search_advanced">
	<legend>
		{translate key="search.indexTerms"}
	</legend>
	<div class="discipline">
		<label class="label" for="discipline">
			{translate key="search.discipline"}
		</label>
		{block name=searchDiscipline}
			<input type="text" for="discipline" name="discipline" value="{$discipline|escape}">
		{/block}
	</div>
	<div class="subject">
		<label class="label" for="subject">
			{translate key="search.subject"}
		</label>
		{block name=searchSubject}
			<input type="text" for="subject" name="subject" value="{$subject|escape}">
		{/block}
	</div>
	<div class="type">
		<label class="label" for="type">
			{translate key="search.typeMethodApproach"}
		</label>
		{block name=searchType}
			<input type="text" for="type" name="type" value="{$type|escape}">
		{/block}
	</div>
	<div class="coverage">
		<label class="label" for="coverage">
			{translate key="search.coverage"}
		</label>
		{block name=searchCoverage}
			<input type="text" for="coverage" name="coverage" value="{$coverage|escape}">
		{/block}
	</div>
	<div class="indexTerms">
		<label class="label" for="indexTerms">
			{translate key="search.indexTermsLong"}
		</label>
		{block name=searchIndexTerms}
			<input type="text" for="indexTerms" name="indexTerms" value="{$indexTerms|escape}">
		{/block}
	</div>
