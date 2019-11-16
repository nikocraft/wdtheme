import Vue from 'vue'
import standardComponentsList from 'frontend/rendering/blocks/preparedList'

export function ucFirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1)
}

export function prepareValue(val, type) {
    let output

    if (type == 'boolean') {
        output = stringToBoolean(val)
    } else if (type == 'number') {
        output = Number(val)
    } else {
        output = val
    }

    return output
}

export function processSettings(rawSettings = {}) {
    let processedSettings = {}

    for (var j = 0; j < rawSettings.length; j++) {
        let setting = rawSettings[j]
        let key = setting.key

        processedSettings[key] = prepareValue(setting.value, setting.type)
    }

    return processedSettings
}

export function getComponentByName(name, componentType = 'block', standardComponents = standardComponentsList, customComponents = {}) {
    let globalComponents = Vue.options.components
    let component
    name = ucFirst(name)

    if (globalComponents[name]) component = globalComponents[name]
    else if (standardComponents[name]) component = standardComponents[name][componentType]
    else if (customComponents[name]) component = customComponents[name][componentType]

    return component
}

function stringToBoolean(string) {
    string = string || ''
    switch(string.toLowerCase().trim()){
        case "true": case "yes": case "1": return true;
        case "false": case "no": case "0": case null: return false;
        default: return Boolean(string);
    }
}
