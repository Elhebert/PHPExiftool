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
class AltTapeName extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:AltTapeName';

    protected string $name = 'AltTapeName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Alt Tape Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291007
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:AltTapeName',
            'desc' => [
                'en' => 'Alt Tape Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
