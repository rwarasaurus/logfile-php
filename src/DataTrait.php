<?php declare(strict_types=1);

namespace Logfile;

trait DataTrait
{
    protected $tags = [];

    protected $user = [];

    protected $release = '';

    public function copy(DataInterface $src): void
    {
        $this->setTags($src->getTags());
        $this->setUser($src->getUser());
        $this->setRelease($src->getRelease());
    }

    public function hasTags(): bool
    {
        return !empty($this->tags);
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    public function addTag(string $key, $value): void
    {
        $this->tags[$key] = $value;
    }

    public function hasUser(): bool
    {
        return !empty($this->user);
    }

    public function getUser(): array
    {
        return $this->user;
    }

    public function setUser(array $user): void
    {
        $this->user = $user;
    }

    public function hasRelease(): bool
    {
        return !empty($this->release);
    }

    public function getRelease(): string
    {
        return $this->release;
    }

    public function setRelease(string $release)
    {
        $this->release = $release;
    }
}
