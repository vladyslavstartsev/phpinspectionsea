package com.kalessil.phpStorm.phpInspectionsEA;

import com.jetbrains.php.config.PhpLanguageLevel;
import com.jetbrains.php.config.PhpProjectConfigurationFacade;
import com.kalessil.phpStorm.phpInspectionsEA.inspectors.apiUsage.UnqualifiedReferenceInspector;

final public class UnqualifiedReferenceInspectorTest extends PhpCodeInsightFixtureTestCase {
    public void testFindsAllNsPatterns() {
        PhpProjectConfigurationFacade.getInstance(myFixture.getProject()).setLanguageLevel(PhpLanguageLevel.PHP710);
        myFixture.enableInspections(UnqualifiedReferenceInspector.class);

        myFixture.configureByFile("fixtures/unqualified-function-refs-ns.php");
        myFixture.testHighlighting(true, false, true);

        /* TODO: QF tests */
    }
    public void testFindsAllNonNsPatterns() {
        PhpProjectConfigurationFacade.getInstance(myFixture.getProject()).setLanguageLevel(PhpLanguageLevel.PHP710);

        myFixture.configureByFile("fixtures/unqualified-function-refs-no-ns.php");
        myFixture.enableInspections(UnqualifiedReferenceInspector.class);
        myFixture.testHighlighting(true, false, true);
    }
}
