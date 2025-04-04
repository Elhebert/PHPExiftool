<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdultContentWarning extends AbstractTagGroup
{
    protected string $id = 'XMP-pur:AdultContentWarning';

    protected string $name = 'AdultContentWarning';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Adult Content Warning',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pur
             * line : 290461
             * type : string
             * writable : true
             * count :
             * flags : avoid,bag,list
             */
            'id' => 'XMP::pur.XMP-pur:AdultContentWarning',
            'desc' => [
                'en' => 'Adult Content Warning',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2369;
}
