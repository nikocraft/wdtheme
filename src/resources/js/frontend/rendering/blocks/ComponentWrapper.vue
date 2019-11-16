<script>
    import { getComponentByName } from 'utils/helpers.js'

    export default {
        functional: true,
        render (createElement, context) {
            function getComponent () {
                let componentName = context.props.componentName
                let comp = getComponentByName(componentName, 'block')
                if (!comp) {
                    console.log('This ' + componentName + ' component does not exist.')
                    return false
                }
                return comp
            }

            return createElement(
                getComponent(),
                context.data,
                context.children
            )
        }
    }
</script>
