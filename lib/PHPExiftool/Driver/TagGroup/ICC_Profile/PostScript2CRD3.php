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
class PostScript2CRD3 extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:PostScript2CRD3';

    protected string $name = 'PostScript2CRD3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Post Script 2 CRD3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101841
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:PostScript2CRD3',
            'desc' => [
                'en' => 'Post Script 2 CRD3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
