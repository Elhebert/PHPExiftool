<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{
    protected string $id = 'Casio:PreviewImage';

    protected string $name = 'PreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 62139
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
