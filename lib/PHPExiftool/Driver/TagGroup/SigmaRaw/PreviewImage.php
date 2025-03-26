<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:PreviewImage';

    protected string $name = 'PreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Main
             * line : 237583
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'SigmaRaw::Main.SigmaRaw:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        1 => [
            /**
             * table_name : SigmaRaw::Main
             * line : 237589
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'SigmaRaw::Main.SigmaRaw:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
