<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageStart extends AbstractTagGroup
{
    protected string $id = 'Olympus:PreviewImageStart';

    protected string $name = 'PreviewImageStart';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Start',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177386
             * type : ?
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.Olympus:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2060;
}
