<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImagerFileTagsVersionStandard extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ImagerFileTagsVersionStandard';

    protected string $name = 'ImagerFileTagsVersionStandard';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Imager File Tags Version Standard',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106805
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ImagerFileTagsVersionStandard',
            'desc' => [
                'en' => 'Imager File Tags Version Standard',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
