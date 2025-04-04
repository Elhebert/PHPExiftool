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
class LogComment extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:LogComment';

    protected string $name = 'LogComment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Log Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291276
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:LogComment',
            'desc' => [
                'en' => 'Log Comment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
