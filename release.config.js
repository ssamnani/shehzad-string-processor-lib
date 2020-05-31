module.exports = {
    verifyConditions: [
        // Verifies a NUGET_TOKEN environment variable has been provided
        () => {
        },
        // Verifies the conditions for the plugins used below
        // For example verifying a GITHUB_TOKEN environment variable has been provided
        '@semantic-release/changelog',
        '@semantic-release/git',
    ],
    branches: [
        "master",
        "next"
    ],
    plugins: [
        "@semantic-release/commit-analyzer",
        "@semantic-release/release-notes-generator",

        // https://github.com/semantic-release/git
        // Git plugin is need so the changelog file will be committed to the Git repository and available on subsequent builds in order to be updated.
        '@semantic-release/git'
    ],
    publish: [
    ],
}