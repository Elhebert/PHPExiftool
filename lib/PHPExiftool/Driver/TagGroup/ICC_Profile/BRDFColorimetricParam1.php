<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BRDFColorimetricParam1 extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:BRDFColorimetricParam1';

    protected string $name = 'BRDFColorimetricParam1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'BRDF Colorimetric Param 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101634
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:BRDFColorimetricParam1',
            'desc' => [
                'en' => 'BRDF Colorimetric Param 1',
            ],
        ],
    ];

    protected int $count = 0;
}
