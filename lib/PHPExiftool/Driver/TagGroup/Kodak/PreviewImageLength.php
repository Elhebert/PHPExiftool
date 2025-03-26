<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTagGroup
{
    protected string $id = 'Kodak:PreviewImageLength';

    protected string $name = 'PreviewImageLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview Image Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Scrn
             * line : 109002
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Scrn.Kodak:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
