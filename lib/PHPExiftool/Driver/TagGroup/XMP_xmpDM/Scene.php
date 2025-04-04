<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Scene extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:Scene';

    protected string $name = 'Scene';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291455
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:Scene',
            'desc' => [
                'en' => 'Scene',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
