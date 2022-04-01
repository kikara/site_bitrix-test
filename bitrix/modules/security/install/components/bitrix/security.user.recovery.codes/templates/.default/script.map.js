{"version":3,"sources":["script.js"],"names":["BX","namespace","Security","UserRecoveryCodes","getUserOtp","Otp","options","defaults","actionUrl","location","href","ui","containerId","this","signedParameters","componentName","_options","mergeObjects","_container","codesTemplate","codesContainer","initializeInterface","prototype","data","regenerateButtons","querySelectorAll","codeTemplate","querySelector","parentNode","cloneNode","forEach","call","bindRegeneration","item","bind","onRegenerate","event","preventDefault","ajax","runComponentAction","mode","then","result","drawRecoveryCodes","showError","message","codes","cleanElement","element","remove","drawCode","code","node","style","display","USED","getAttribute","addClass","childs","initCodeTemplate","role","innerHTML","util","htmlspecialchars","VALUE","USING_DATE","appendChild","errorMessage","_errorContainer","errorElement","create","children","text","html","attrs","className","clearErrors","cleanNode","onComplete","_successfulUrl","origin","add","p","hasOwnProperty","constructor","Object","clone","o","JSON","parse","stringify"],"mappings":"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","file":"script.map.js"}