<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\OpenEXR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenderingTransform extends AbstractTagGroup
{
    protected string $id = 'OpenEXR:RenderingTransform';

    protected string $name = 'RenderingTransform';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rendering Transform',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : OpenEXR::Main
             * line : 182386
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'OpenEXR::Main.OpenEXR:RenderingTransform',
            'desc' => [
                'en' => 'Rendering Transform',
            ],
        ],
    ];

    protected int $count = 0;
}
